import React, { useState, useEffect } from "react";
import { useParams, Link } from "react-router-dom";

const SanPhamDanhMuc = () => {
  const [searchTerm, setSearchTerm] = useState("");
  const [filteredProducts, setFilteredProducts] = useState([]);

  const { productId } = useParams();
  const [products, setProducts] = useState([]);

  useEffect(() => {
    fetch(`http://localhost:8082/sanphamdanhmuc/${productId}`)
      .then((response) => response.json())
      .then((data) => setProducts(data))
      .catch((err) => console.log(err));
  }, [productId]);

  useEffect(() => {
    const filtered = products.filter((product) => {
      return product.name.toLowerCase().includes(searchTerm.toLowerCase()); // Thay "name" bằng tên trường chứa thông tin sản phẩm của bạn
    });
    setFilteredProducts(filtered);
  }, [searchTerm, products]);

  return (
    <div>
      <br />
      <br />
      <br />
      <br />
      <div style={{ display: "flex", justifyContent: "center" }}>
        <input
          type="text"
          placeholder="Tìm kiếm sản phẩm..."
          value={searchTerm}
          onChange={(e) => setSearchTerm(e.target.value)}
          style={{
            width: "50%", // Thiết lập chiều rộng input
            height: "40px", // Thiết lập chiều cao input
            fontSize: "16px", // Kích thước font chữ
            textAlign: "center", // Căn giữa nội dung văn bản trong input
            backgroundColor: "#blue", // Màu nền đen
            color: "black", // Màu văn bản trắng
            border: "1px solid #ccc", // Viền input
            borderRadius: "5px", // Đường viền cong
          }}
        />
      </div>

      <div className="dinhdangsanphamdacbiet">
        <div className="taokhoangcachsanphamdacbiet">
          <div
            style={{
              marginTop: "2.5rem",
              display: "flex",
              justifyContent: "space-between",
            }}
          ></div>
        </div>
        <div>
          <div>
            <div className="dinhdangthanghanggiuacacphan">
              {filteredProducts.map((product) => (
                <div key={product.id} style={{ minWidth: 0, flexBasis: "25%" }}>
                  <Link to={`/sanpham/${product.id}`}>
                    <img
                      loading="lazy"
                      src={`/storage/${product.img}`}
                      alt={product.name}
                      style={{ height: "140px", width: "280px" }}
                    />
                  </Link>
                  <Link
                    to={`/sanpham/${product.id}`}
                    className="dieuchinhkhoangcachchusanphamnoibat"
                  >
                    {product.name}
                  </Link>
                  <div className="dieuchinhkhoangcachgiasanphamchitiet">
                    <div className="giatienthanghang">
                      <div>{product.sale}đ</div>
                      <div
                        style={{
                          color: "#9ca3af",
                          textDecorationLine: "line-through",
                        }}
                      >
                        {product.price}đ
                      </div>
                      <div>
                        <small className="dieuchinhphantramgiamgia">
                          -
                          {Math.floor(
                            ((product.price - product.sale) / product.price) *
                              100
                          )}
                          %
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
              ))}
            </div>
            <br />
            <hr />
          </div>
        </div>
      </div>
      <br />
      <br />
      <br />
      <br />
    </div>
  );
};

export default SanPhamDanhMuc;
