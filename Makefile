server:
	hhvm -m server -v Server.Type=proxygen -p 8080

check:
	hh_client

