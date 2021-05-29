use db_app_db2;

create table if not exists livros(
	codigo_livro 		int primary key unique auto_increment,
    autor 				varchar(100),
    titulo 				varchar(100), 
    editora 			varchar(100),
    ano_publicacao		varchar(4)
);

SELECT * FROM db_app_db2.livros;