#!/bin/bash
# sudo docker-compose exec db bash
mysql -uroot -proot < /var/db/schema.sql
