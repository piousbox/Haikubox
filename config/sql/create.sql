create table rows(
    `id` int(12) not null auto_increment primary key,
    `service_name` varchar(300) null,
    `host_url` varchar(500) null,
    `username` varchar(200) null,
    `password` varchar(200) null,
    `descr` text null
);

create table notes (
    `id` int(12) not null auto_increment primary key,
    `date` timestamp default now(),
    `body` text null,
    `row_id` int(12) null
);