drop database if exists soccer;
create database soccer;
use soccer;

drop table if exists jogador;
create table jogador (
    id int(10) unsigned auto_increment,
    nome varchar(30), 
    sobrenome varchar(50),
    apelido varchar(20),
    email varchar(20),
    senha varchar(50),
    n_celular varchar(20),
    pagina_facebook varchar(50),
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

drop table if exists local;
create table local(
    id int(5) unsigned auto_increment,
    descricao varchar(50),
    latitude varchar(10), 
    longitude varchar(10),
    PRIMARY KEY (id)      
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

drop table if exists jogo;
create table jogo(
    id int(5) unsigned auto_increment,
    data_horario datetime,
    id_local int(10) unsigned,
    PRIMARY KEY (id),
    KEY fk_local_id (id_local),
    CONSTRAINT fk_local_id FOREIGN KEY (id_local) REFERENCES local (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

drop table if exists jogo_jogador;
create table jogo_jogador(
    id_jogo int(5) unsigned,
    id_jogador int(10) unsigned,
    KEY fk_jogo_id (id_jogo),
    CONSTRAINT fk_jogo_id FOREIGN KEY (id_jogo) REFERENCES jogo (id),
    KEY fk_jogador_id (id_jogador),
    CONSTRAINT fk_jogador_id FOREIGN KEY (id_jogador) REFERENCES jogador (id)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into jogador values (null, 'Maicon', 'Alves','','maicon@gmail.com',PASSWORD('senhamaicon'),'99686348','www.facebook.com/maicon');
insert into jogador values (null, 'Gustavo', 'da Silva','','gustavo@gmail.com',PASSWORD('senhagabriel'),'98686748','www.facebook.com/gustavo');
insert into jogador values (null, 'Gabriel', 'da Silva','','gabriel@gmail.com',PASSWORD('senhamaicon'),'98686345','www.facebook.com/gabriel');
insert into jogador values (null, 'Silvio', 'da Costa','','silvio@gmail.com',PASSWORD('senhasilvio'),'996861248','www.facebook.com/silvio');
insert into jogador values (null, 'Jeferson', 'Almeida','','jeferson@gmail.com',PASSWORD('senhajeferson'),'98686377','www.facebook.com/jeferson');
insert into jogador values (null, 'Wesley', 'Hilebrand','','wesley@gmail.com',PASSWORD('senhawesley'),'98699348','www.facebook.com/wesley');
insert into jogador values (null, 'Rafael', 'Neto','','rafael@gmail.com',PASSWORD('senharafael'),'98682648','www.facebook.com/rafael');
insert into jogador values (null, 'Danilo', 'Patrício','','danilo@gmail.com',PASSWORD('senhadanilo'),'99646348','www.facebook.com/danilo');
insert into jogador values (null, 'Alexandre', 'Babeloni','Xandi','alexandre@gmail.com',PASSWORD('senhaalexandre'),'98123448','www.facebook.com/alexandre');
insert into jogador values (null, 'Gerson', 'Manuel','gerso','gerson@gmail.com',PASSWORD('senhagerson'),'98116322','www.facebook.com/gerson');
insert into jogador values (null, 'Vagner', 'Everton','valter','vagner@gmail.com',PASSWORD('senhavagner'),'98236389','www.facebook.com/vagner');
insert into jogador values (null, 'Rian', 'Frederico','Punhetinha','rian@gmail.com',PASSWORD('senharian'),'99676367','www.facebook.com/rian');

select * from jogador;

insert into local values (null,'local1','12','45');
insert into local values (null,'local2','44','56');
insert into local values (null,'local3','78','33');

insert into jogo values (null,'2013-05-12 20:00:00',1);
insert into jogo values (null,'2013-05-19 19:00:00',1);
insert into jogo values (null,'2013-06-01 20:00:00',2);
insert into jogo values (null,'2013-06-08 19:00:00',2);
insert into jogo values (null,'2013-07-20 20:00:00',3); 
insert into jogo values (null,'2013-07-27 19:00:00',3); 

insert into jogo_jogador values (1,1);
insert into jogo_jogador values (1,2);
insert into jogo_jogador values (1,3);
insert into jogo_jogador values (1,4);
insert into jogo_jogador values (1,5);
insert into jogo_jogador values (1,6);
insert into jogo_jogador values (1,7);
insert into jogo_jogador values (1,8);
insert into jogo_jogador values (1,9);
insert into jogo_jogador values (1,10);
insert into jogo_jogador values (1,11);
insert into jogo_jogador values (1,12);

insert into jogo_jogador values (1,1);
insert into jogo_jogador values (1,4);
insert into jogo_jogador values (1,5);
insert into jogo_jogador values (1,6);
insert into jogo_jogador values (1,7);
insert into jogo_jogador values (1,8);
insert into jogo_jogador values (1,9);
insert into jogo_jogador values (1,10);
insert into jogo_jogador values (1,11);
insert into jogo_jogador values (1,12);

insert into jogo_jogador values (2,1);
insert into jogo_jogador values (2,2);
insert into jogo_jogador values (2,3);
insert into jogo_jogador values (2,4);
insert into jogo_jogador values (2,5);
insert into jogo_jogador values (2,6);
insert into jogo_jogador values (2,7);
insert into jogo_jogador values (2,8);
insert into jogo_jogador values (2,9);
insert into jogo_jogador values (2,11);
insert into jogo_jogador values (2,12);

insert into jogo_jogador values (3,1);
insert into jogo_jogador values (3,2);
insert into jogo_jogador values (3,3);
insert into jogo_jogador values (3,4);
insert into jogo_jogador values (3,5);
insert into jogo_jogador values (3,6);
insert into jogo_jogador values (3,7);
insert into jogo_jogador values (3,8);
insert into jogo_jogador values (3,9);
insert into jogo_jogador values (3,10);
insert into jogo_jogador values (3,11);

insert into jogo_jogador values (4,1);
insert into jogo_jogador values (4,3);
insert into jogo_jogador values (4,4);
insert into jogo_jogador values (4,5);
insert into jogo_jogador values (4,6);
insert into jogo_jogador values (4,7);
insert into jogo_jogador values (4,8);
insert into jogo_jogador values (4,9);
insert into jogo_jogador values (4,10);
insert into jogo_jogador values (4,11);
insert into jogo_jogador values (4,12);

insert into jogo_jogador values (5,1);
insert into jogo_jogador values (5,2);
insert into jogo_jogador values (5,3);
insert into jogo_jogador values (5,4);
insert into jogo_jogador values (5,6);
insert into jogo_jogador values (5,7);
insert into jogo_jogador values (5,9);
insert into jogo_jogador values (5,10);
insert into jogo_jogador values (5,11);
insert into jogo_jogador values (5,12);

insert into jogo_jogador values (6,1);
insert into jogo_jogador values (6,2);
insert into jogo_jogador values (6,3);
insert into jogo_jogador values (6,4);
insert into jogo_jogador values (6,5);
insert into jogo_jogador values (6,7);
insert into jogo_jogador values (6,8);
insert into jogo_jogador values (6,9);
insert into jogo_jogador values (6,10);
insert into jogo_jogador values (6,11);
insert into jogo_jogador values (6,12);


