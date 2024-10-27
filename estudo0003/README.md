CONFIGURAÇÕES

1 - no arquivo /Model/DAO/Conn.php está a configuração da conexão com o banco de dados
2 - no arquivo /Utils/RenderView.php está a PATH do projeto no seu localhost
3 - Crie a table usuario como descito abaixo:
    CREATE TABLE usuario ( 
                id int not null primary key autoincrement,
                nome varchar(150),
                email varchar(150),
                whatsapp varchar(150)
    )

