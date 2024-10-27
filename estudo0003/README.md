CONFIGURAÇÕES

1 - no arquivo /Model/DAO/Conn.php está a configuração da conexão com o banco de dados MySQL \n
2 - no arquivo /Utils/RenderView.php está a PATH do projeto no seu localhost\n
3 - Crie a table usuario como descito abaixo:\n
    CREATE TABLE usuario ( \n
                id int not null primary key autoincrement,\n
                nome varchar(150),\n
                email varchar(150),\n
                whatsapp varchar(150)\n
    )

