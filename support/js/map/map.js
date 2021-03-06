import * as util from './util.js'

const colors = {
	red: [
		'#F4C7C3',
		'#E57373',
		'#F44236',
		'#D32E30',
		'#B71B1C',
	],
	yellow: [
		'#FFECB3',
		'#FFD54F',
		'#FFC107',
		'#FFB300',
		'#FF8F00',
	],
	green: [
		'#C8E6C9',
		'#81C784',
		'#4CAF50',
		'#43A047',
		'#388E3C',
	],
	blue: [
		'#BADEFB',
		'#64B5F6',
		'#2096F3',
		'#1C88E5',
		'#1465C0',
	]
}

window.addEventListener('DOMContentLoaded', (event) => {
    startMap()
	util.fullScreenChange(test)
})

function test() {
	console.log('test')
}


function startMap() {
	const mapLink = 'support/js/map/data/json/digos.json'
	const mapRoot = document.getElementById('map-root')
	const mapContainer = document.getElementById('map')
	const map = document.getElementById('map-davao')
	let filter = {}

	util.XMLRequest(mapLink)
	.then(({barangays, info}) => {
		setMapColor(barangays)
		addMapClick()
		addMapHoverOver()
		addMapHoverOut()
		addMapColorfilter()
		addMapKeyEvents()
		addMapZoom()
		addMapPositionFilter()
		moveMap()
		moveFilterBox()
		fillBarangayList()

		function setMapColor(barangays, option) {
			console.log(filter)
			option = Object.assign(
				{
					red: true, 
					yellow: true, 
					green: true, 
					blue: true,
					position: 'total',
					sequential: false,
					colorIntensity: 2,
				},
				option
			)

			let {
				red, 
				yellow, 
				green, 
				blue, 
				position, 
				sequential, 
				colorIntensity
			} = option

			const {total} = info

			for (let index = 0; index < barangays.length; index++) {
				const {name, statistics} = barangays[index]
				const filteredStat = {}
				
				if(red) filteredStat.red = statistics[position].red
				if(yellow) filteredStat.yellow = statistics[position].yellow
				if(green) filteredStat.green = statistics[position].green
				if(blue) filteredStat.blue = statistics[position].blue

				const getColor = Object.keys(filteredStat).reduce((now, current) => filteredStat[now] > filteredStat[current] ? now : current )
				
				if(sequential) {	
					const statArray = splitNumberToArray(total[getColor])
					const colorStat = statistics[position][getColor]
					colorIntensity = getColorIntensity(colorStat, statArray)
				} 

				fillColor(name, getColor, colorIntensity)
			}
		}

		function fillColor(barangay, color, colorIntensity) {
			const barangayNode = document.querySelector(`[data-name='${barangay}']`)
			barangayNode.style.fill = colors[color][colorIntensity]
		}

		function getColorIntensity(number, array) {
			let current = 0
			let index = array.findIndex((value, index) => {
				if(number >= current && number < value ) return index
				current = value
			})

			if(index == -1) index = 4
			return index
		}

		function addMapClick() {
			// todo
			map.addEventListener('click', function({target: barangayNode}) {
				const barangay = barangayNode.getAttribute('data-name') || undefined
				if(barangay) displayPuroks(getBarangayInfo(barangay))
			})	
		}

		function addMapHoverOver() {
			// todo
			map.addEventListener('mouseover', function({target: barangayNode}) {
				const barangay = barangayNode.getAttribute('data-name') || undefined 
				if(barangay) displayBarangayInfo(getBarangayInfo(barangay)) 
					
			})
		}

		function placeMapMaker(barangayNode) {
			// todo
			const bbox = barangayNode.getBoundingClientRect()
			var center = {
				x: bbox.left + bbox.width,
				y: bbox.top  + bbox.height,
          	};

			var svgimg = document.createElementNS('http://www.w3.org/2000/svg', 'image')
			svgimg.setAttributeNS(null, 'height', 75)
			svgimg.setAttributeNS(null, 'width', 75)
			svgimg.setAttributeNS('http://www.w3.org/1999/xlink', 'href', '../image/mapFinder.png')
			svgimg.setAttributeNS(null, 'x', center.x)
			svgimg.setAttributeNS(null, 'y', center.y)
			svgimg.setAttributeNS(null, 'visibility', 'visible')
			svgimg.setAttributeNS(null, 'opacity', 0.9)
			map.appendChild(svgimg)
		}

		function getBarangayInfo(barangayName) {
			if(barangayName == undefined) return
			return barangays.find(({name}) => name == barangayName)
		}

		function displayBarangayInfo(barangayInfo) {
			// todo			
			if(barangayInfo == undefined) return
			const {barangay, totalPuroks, statistics} = barangayInfo
		}

		function displayPuroks(barangayInfo) {
			// todo
			if(barangayInfo == undefined) return
			let sample = ''

			const {name, puroks, statistics} = barangayInfo
			for (const [index, purok] of puroks.entries()) {
				sample += `<li>${purok.name}</li>`
			}

			document.getElementById('purok-list').innerHTML = sample
			
		}

		function addMapHoverOut() {
			// map.addEventListener('mouseout', function({target}) {
			// 	target.style.stroke = '#aeaeaf'
			// 	target.style.strokeWidth = '1px'
			// })
		}

		function formatText(data) {
			// todo
			// const {barangay, stats} = data

			// const barangayText = document.getElementById('barangay-text')
			// const redText = document.getElementById('red-text')
			// const yellowText = document.getElementById('yellow-text')
			// const greenText = document.getElementById('green-text')
			// const blueText = document.getElementById('blue-text')

			// barangayText.innerHTML = barangay
			// redText.innerHTML = stats.red
			// yellowText.innerHTML = stats.yellow
			// greenText.innerHTML = stats.green
			// blueText.innerHTML = stats.blue
		}

		function addMapColorfilter() {	
			const colorNode = document.getElementById('color-filter')

			colorNode.addEventListener('change', function(event) {
				const color = event.target.value
				setColorNodes(color)
				if(color == 'all') {
					filter.red = true
					filter.yellow = true 
					filter.green = true 
					filter.blue = true
					filter.sequential = false
					setMapColor(barangays, filter)
				}else {
					filter.red = false
					filter.yellow = false 
					filter.green = false 
					filter.blue = false
					filter.sequential = true

					filter[color] = true
					setMapColor(barangays, filter)
				}
			})
		}

		function setColorNodes(color) {
			if(colors[color]) {
				const colorRangeNodes = document.querySelectorAll('[color-range]')
				colorRangeNodes.forEach((node) => {
					let range = node.getAttribute('color-range')
					node.style.backgroundColor = colors[color][range]
				})
			}else {
				console.log('fail')
			}
		}

		function addMapPositionFilter() {
			const positionNode = document.getElementById('position-filter')
			positionNode.addEventListener('change', function(event) {
				const position = event.target.value
				filter.position = position
				setMapColor(barangays, filter)
			})
		}

		function splitNumberToArray(total) {
			const sequence = []
			const startNumber = total/5
			
			for (let index = 1; index <= 5; index++) {
				sequence.push(startNumber * index)
			}
			
			return sequence
		}

		function addMapZoom() {
			map.addEventListener('wheel', util.zoom)
		}

		function addMapKeyEvents() {
			document.addEventListener('keydown', function(event) {
				let key = event.key.toLowerCase()
				let getMapLeftCord = util.returnOnlyNumbers(mapContainer.style.left) || 0
				let getMapTopCord = util.returnOnlyNumbers(mapContainer.style.top) || 0 
				const INCREASE = 50

				if(key == 'a') {
					moveLeft()
				}
				if(key == 's') {
					moveDown() 
				}
				if(key == 'd') {
					moveRight()	
				}
				if(key == 'w') {
					moveTop()
				}
				if(key == 'f') {
					fullScreen()
				}
				if(key == 'r') {
					resetMapPlacement()
				}

				function moveLeft() {
					let newLeft = getMapLeftCord + INCREASE
					mapContainer.style.left = newLeft + 'px'
				}

				function moveRight() {
					let newLeft = getMapLeftCord - INCREASE
					mapContainer.style.left = newLeft + 'px'
				}

				function moveDown() {
					let newTop = getMapTopCord - INCREASE
					mapContainer.style.top = newTop + 'px'
				}

				function moveTop() {
					let newTop = getMapTopCord + INCREASE
					mapContainer.style.top = newTop + 'px'
				}

				function fullScreen() {
					util.toggleFullScreen(mapRoot)	
				}

				function resetMapPlacement() {
					util.resetZoom(map)
					mapContainer.style.top = '0'
					mapContainer.style.left = '0'
				}

			})
		}

		function moveMap() {
			$('#map-davao').draggable({ 
				scroll: true, 
				scrollSensitivity: 100,
				cursor: 'move',
			})
		}

		function moveFilterBox() {
			$('.filter-box').draggable({ 
				handle: '.move-box',
				containment: 'parent',
				scroll: true, 
				scrollSensitivity: 100,
				cursor: 'move',
			})
		}

		function fillBarangayList() {
			const barangayList = document.getElementById('select-barangay')
			let renderer = ''


		}

	})
	.catch((errorMessage) => {
		console.log(errorMessage)
	})
	
}

