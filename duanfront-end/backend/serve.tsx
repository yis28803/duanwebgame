const express = require("express");
const mysql = require("mysql");
const cors = require("cors");

const app = express();
app.use(cors());

const db = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "abc",
});

app.get("/", (req, res) => {
  return res.json("Chao ban son");
});

app.get("/users", (req, res) => {
  const sql = "SELECT * FROM users";
  db.query(sql, (err, data) => {
    if (err) return res.json(err);
    return res.json(data);
  });
});

app.get("/sanpham", (req, res) => {
  const sql = "SELECT * FROM sanpham";
  db.query(sql, (err, data) => {
    if (err) return res.json(err);
    return res.json(data);
  });
});

app.get("/theloai", (req, res) => {
  const sql = "SELECT * FROM theloai";
  db.query(sql, (err, data) => {
    if (err) return res.json(err);
    return res.json(data);
  });
});

app.get("/danhmuc", (req, res) => {
  const sql = "SELECT * FROM danhmuc";
  db.query(sql, (err, data) => {
    if (err) return res.json(err);
    return res.json(data);
  });
});

app.get("/sanpham/:id", (req, res) => {
  const id = req.params.id; // Lấy id từ URL
  const sql = `
  SELECT sanpham.*, theloai.name_tl AS genre_name
  FROM sanpham, theloai
  WHERE sanpham.idtl = theloai.id
  AND sanpham.id = ${id}
  `;
  db.query(sql, (err, data) => {
    if (err) return res.json(err);
    return res.json(data);
  });
});

app.get("/sanphamdanhmuc/:id", (req, res) => {
  const id = req.params.id; // Lấy id danh mục từ URL
  const sql = `
  SELECT sanpham.*, danhmuc.name_dm AS category_name
  FROM sanpham, danhmuc
  WHERE sanpham.iddm = danhmuc.id
  AND sanpham.iddm = ${id}
  `;
  db.query(sql, (err, data) => {
    if (err) return res.json(err);
    return res.json(data);
  });
});

app.get("/sanphamcungloai/:id", (req, res) => {
  const id = req.params.id; // Lấy id sản phẩm từ URL
  const sql = `
    SELECT *
    FROM sanpham
    WHERE iddm = (
      SELECT iddm
      FROM sanpham
      WHERE id = ${id}
    )
    AND id != ${id}
  `;
  db.query(sql, (err, data) => {
    if (err) return res.json(err);
    return res.json(data);
  });
});

app.listen(8082, () => {
  console.log("listening");
});
