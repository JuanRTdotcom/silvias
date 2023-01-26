FROM mariadb:10.3


COPY *.sql /docker-entrypoint-initdb.d/

# we use sed and replace it with `bind-address=0.0.0.0`)

#COPY my_custom.cnf /etc/mysql/my.cnf

