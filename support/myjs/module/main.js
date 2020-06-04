import * as ser from '../jquery.serializeToJSON.js';

export const base_url = window.location.origin;
export const location_path = window.location.pathname;


    $('#developerForm').submit(function(e)
    {
        e.preventDefault();
        console.log(`Developer's Form`);

        $.post(`${base_url}/main/login/loginDeveloper`, $(this).serialize(), function(data)
        {

            if(data.res)
            {
                console.log('successfully login!');
                Swal.fire(
                    'Success Login!',
                    `You will now be directed to developer's page`,
                    'success'
                  ).then(() => 
                  { 
                    window.location.href= base_url+'/developer/';
                  });
            }
            else
            {
                Swal.fire(
                    'Login Failed!',
                    `Your email and password do not match`,
                    'warning'
                  );
            }
        },'json');

    });

    $('#adminForm').submit(function(e)
    {
        e.preventDefault();
        console.log(`Admin's Form`);
        // console.log($(this).serialize());
        $.post(`${base_url}/main/login/loginAdmin`, $(this).serialize(), function(data)
        {
            console.log(data);
            
            if(data.res)
            {
                console.log('successfully login!');
                Swal.fire(
                    'Success Login!',
                    `You will now be directed to Administrator's page`,
                    'success'
                  ).then(() => 
                  { 
                    window.location.href= base_url+'/admin/';
                  });
            }
            else
            {
                console.log('login failed!');
                Swal.fire(
                    'Login Failed!',
                    `Your email and password do not match`,
                    'warning'
                  );
            }
        },'json');
    });

    $('#adminRegisterForm').submit(function(e)
    {
        e.preventDefault();
        console.log(`Admin's Register Form`);
        $.post(`${base_url}/main/register/registerAdmin`, $(this).serialize(), function(data)
        {
            if(data.res)
            {
                console.log('successfully Register!');
                Swal.fire(
                    'Successfully Registered!',
                    `You will now be directed to Administrator's Login page`,
                    'success'
                  ).then(() => 
                  { 
                    window.location.href= base_url+'/main/adminMode/';
                  });
            }
            else
            {
                console.log('register failed!');
                Swal.fire(
                    'Register Failed!',
                    `Your email was not found!`,
                    'warning'
                  );
            }
        },'json');
    }); 

    $('#teacherLoginForm').submit(function(e)
    {
        e.preventDefault();
        console.log(`Teacher's Login Form`);
        console.log($(this).serialize());
        $.post(`${base_url}/main/login/loginTeacher`, $(this).serialize(), function(data)
        {
            console.log(data);

            if(data.res)
            {
                console.log('successfully login!');
                Swal.fire(
                    'Successfully Login!',
                    `You will now be directed to Teacher's Page`,
                    'success'
                  ).then(() => 
                  { 
                    window.location.href= base_url+'/teacher/teacher_profile';
                  });
            }
            else
            {
                console.log('login failed!');
                Swal.fire(
                    'Login Failed!',
                    `Your email and password mismatch!`,
                    'warning'
                  );
            }
        },'json');

    });

    $('#teacherRegisterForm').submit(function(e)
    {
        e.preventDefault();
        console.log(`Teacher's Register Form`);
        console.log($(this).serialize());

        $.post(`${base_url}/main/register/registerTeacher`, $(this).serialize(), function(data)
        {
            if(data.res)
            {
                console.log('successfully Register!');
                window.location.href= base_url+'/main/teacherMode/';
            }
            else
            {
                console.log('login failed!');
            }
        },'json');

    });

    $('#guidanceLoginForm').submit(function(e)
    {
        e.preventDefault();
        console.log(`Guidance's Login Form`);
        console.log($(this).serialize());
        $.post(`${base_url}/main/login/loginGuidance`, $(this).serialize(), function(data)
        {
            console.log(data);

            if(data.res)
            {
                console.log('successfully login!');
                Swal.fire(
                    'Successfully Login!',
                    `You will now be directed to Guidance's Page`,
                    'success'
                  ).then(() => 
                  { 
                    window.location.href= base_url+'/guidance/guidance_profile';
                  });
            }
            else
            {
                console.log('login failed!');
                Swal.fire(
                    'Login Failed!',
                    `Your email and password mismatch!`,
                    'warning'
                  );
            }
        },'json');

    });

    $('#guidanceRegisterForm').submit(function(e)
    {
        e.preventDefault();
        console.log(`Guidance's Register Form`);
        console.log($(this).serialize());

        $.post(`${base_url}/main/register/registerGuidance`, $(this).serialize(), function(data)
        {
            if(data.res)
            {
                console.log('successfully Register!');
                window.location.href= base_url+'/main/guidanceMode/';
            }
            else
            {
                console.log('login failed!');
            }
        },'json');

    });
