import { table, comp } from '../../datatable/datatable.js';

table.get_table_id('kanioh');
table.create_table('diri');

comp.column(null, 30, 'Col1', 'col');
comp.column(null, 50, 'Col2', 'col');

table.load_table(comp.components);
