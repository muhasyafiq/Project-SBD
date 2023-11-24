create table comments (
	id SERIAL not null,
	username varchar not null,
	comment_text VARCHAR not null,
	created_at timestamp not null default now(),
	customer_id serial,
	primary key(id),
	constraint fk_customer
		foreign key(customer_id) references customer(id) on delete set null 
);