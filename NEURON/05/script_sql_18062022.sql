-- self join
select e.`name`, e.position, e.departemen, e.sallary, e2.`name` as leader
from employees as e left join employees as e2 on e2.id = e.leader_id;

-- self join
select * from category order by id;
select c.id, c.`name`, c.category_id, c2.id, c2.`name`
from category as c left join category as c2 on c.category_id = c2.id order by c.id;

select max(amount) as terbesar, min(amount) as terendah, avg(amount) as rata_rata,
sum(amount) as akumulasi_transaksi, count(order_id) as jumlah_transaksi
from penjualan;

select p.order_id, p.customer_name, p.date, p.payment_type, 
sum(pd.qty*pd.price) as total, count(pd.qty) as jumlah_item
from penjualan as p join penjualan_detail as pd on pd.order_id = p.order_id
group by p.order_id;

select * from penjualan;
select * from penjualan_detail;
select * from product; 

select p.order_id, p.customer_name, p.date, p.payment_type, 
sum(pd.qty*prod.price) as total, count(pd.qty) as jumlah_item, prod.`name`, prod.price, pd.qty as quantity
from penjualan as p 
join penjualan_detail as pd on pd.order_id = p.order_id
join product as prod on pd.product_id = prod.product_id
group by p.order_id;

select p.order_id, p.customer_name, p.date, p.payment_type, 
sum(pd.qty*prod.price) as total, count(pd.qty) as jumlah_item, prod.`name`, prod.price, pd.qty as quantity
from penjualan as p 
join penjualan_detail as pd on pd.order_id = p.order_id
join product as prod on pd.product_id = prod.product_id
where pd.qty < 10
group by p.order_id;

select p.order_id, p.customer_name, p.date, p.payment_type, 
sum(pd.qty*prod.price) as total, count(pd.qty) as jumlah_item, prod.`name`, prod.price, pd.qty as quantity
from penjualan as p 
join penjualan_detail as pd on pd.order_id = p.order_id
join product as prod on pd.product_id = prod.product_id
group by p.order_id
having pd.qty < 10;

select p.order_id, p.customer_name, p.date, p.payment_type, 
sum(pd.qty*prod.price) as total, count(pd.qty) as jumlah_item, prod.`name`, prod.price, pd.qty as quantity
from penjualan as p 
join penjualan_detail as pd on pd.order_id = p.order_id and pd.qty < 10
join product as prod on pd.product_id = prod.product_id
group by p.order_id;

show triggers;

create view top_view_artikel as select * from artikel order by viewer desc;
select * from top_view_artikel;

call tampil_transaksi('debit');

start transaction;

delete from penjualan where order_id = 3;

select * from penjualan;

rollback;

commit;

select * from penjualan;