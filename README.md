# consulta
 Sistema de conulta de usuários

 Aqui um exemplo de como criar a tabelo no MYSQL

    create table USUARIO
    (
        ID mediumint not null auto_increment primary key, 
        CPF numeric(11) not null,
        NOME varchar(80) not null,
        SEXO varchar(1) not null,
        NOME_M varchar(80) not null,
        SENHA varchar(80) not null,
        TEL_CEL varchar (11),
        TEL_FIX varchar (8),
        ENDERECO varchar (50),
        status_USUARIO varchar(30) not null,
        DT_ULT_VAL timestamp not null,
        DATA_NASC date not null,
        TIPO_USUARIO varchar(30) not null
    );

    insert into usuario (CPF, NOME, SEXO, NOME_M, SENHA, TEL_CEL, TEL_FIX, ENDERECO, status_USUARIO, DT_ULT_VAL, DATA_NASC, TIPO_USUARIO)
    values
        (12345678909 ,'admin','M','fulana','123senha', '12312312312','44344343','lugar legal', 'ATIVO', current_timestamp, '1997-05-15','MASTER'),
        (98765432100 ,'Maria','M','fulana','123senha', '21912345677','44344343','lugar legal', 'ATIVO', current_timestamp, '1997-05-15','COMUM'),
        (45678912345 ,'João','F','fulana','123senha', '21912345679','44344343','lugar legal', 'ATIVO', current_timestamp, '1997-05-15','COMUM'),
        (32165498780 ,'Mario','F','fulana','123senha', '21912345688','44344343','lugar legal', 'ATIVO', current_timestamp, '1997-05-15','COMUM'),
        (55555555555 ,'Marcos','M','fulana','123senha', '21912345567','44344343','lugar legal', 'ATIVO', current_timestamp, '1997-05-15','COMUM'),
        (99999999999 ,'Julia','F','fulana','123senha', '21912334567','44344343','lugar legal', 'ATIVO', current_timestamp, '1997-05-15','COMUM'),
        (88888888888 ,'Rafael','F','fulana','123senha', '21912234567','44344343','lugar legal', 'ATIVO', current_timestamp, '1997-05-15','COMUM'),
        (77777777777 ,'Rafaela','M','fulana','123senha', '21911234567','44344343','lugar legal', 'ATIVO', current_timestamp, '1997-05-15','COMUM'),
        (66666666666 ,'Paula','F','fulana','123senha', '21919234567','44344343','lugar legal', 'ATIVO', current_timestamp, '1997-05-15','COMUM'),
        (3333333333 ,'Carolina','F','fulana','123senha', '21922345678','44344343','lugar legal', 'ATIVO', current_timestamp, '1997-05-15','COMUM');

