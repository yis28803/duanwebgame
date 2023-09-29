import React, { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import { Link } from "react-router-dom";

const SanPhamCT = () => {
  const calculateDiscountPercentage = (price, sale) => {
    const discountPercentage = ((price - sale) / price) * 100;
    return `${Math.floor(discountPercentage)}`;
  };

  const { productId } = useParams();
  const [product, setProduct] = useState({});
  const [relatedProducts, setRelatedProducts] = useState([]); // Thêm state để lưu trữ sản phẩm cùng loại

  useEffect(() => {
    // Lấy thông tin sản phẩm chính
    fetch(`http://localhost:8082/sanpham/${productId}`)
      .then((response) => response.json())
      .then((data) => {
        setProduct(data);
      })
      .catch((err) => console.log(err));

    // Lấy danh sách sản phẩm cùng loại
    fetch(`http://localhost:8082/sanphamcungloai/${productId}`)
      .then((response) => response.json())
      .then((data) => {
        setRelatedProducts(data);
      })
      .catch((err) => console.log(err));
  }, [productId]);

  if (Object.keys(product).length === 0) {
    return <div>Loading...</div>;
  }

  return (
    <>
      <div>
        {/* Thêm JavaScript để cập nhật số lượng sản phẩm */}
        <div className="cau30">
          <div className="cau2">
            {/* Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng */}
            {/* Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng */}
            {/* Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng */}
            {/* Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng */}
            {/* Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng */}
            {product.map((d, i) => (
              <div className="cau10">
                <div style={{ minWidth: 0, flexBasis: "37.5%" }}>
                  <div className="cau11">
                    <div className="cau12">
                      <img src={"/storage/" + d.img} />
                    </div>
                  </div>
                </div>

                <div style={{ minWidth: 0, flexBasis: "37.5%" }}>
                  <div className="cau13">
                    <div className="cau14" key={i}>
                      <div className="cau15">
                        <a
                          className="cau16"
                          href="/gia-han-youtube-premium-12-thang"
                        >
                          Sản phẩm
                        </a>
                        <h3>{d.name}</h3>
                      </div>
                      <div className="cau17">
                        <div className="cau18">
                          <svg
                            className="cau19"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                          >
                            <path d="M509.5 184.6L458.9 32.8C452.4 13.2 434.1 0 413.4 0H98.6c-20.7 0-39 13.2-45.5 32.8L2.5 184.6c-1.6 4.9-2.5 10-2.5 15.2V464c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V199.8c0-5.2-.8-10.3-2.5-15.2zM32 199.8c0-1.7.3-3.4.8-5.1L83.4 42.9C85.6 36.4 91.7 32 98.6 32H240v168H32v-.2zM480 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V232h448v232zm0-264H272V32h141.4c6.9 0 13 4.4 15.2 10.9l50.6 151.8c.5 1.6.8 3.3.8 5.1v.2z"></path>
                          </svg>
                          <div>
                            Tình trạng:{" "}
                            <span style={{ color: "#29b474" }}>Còn hàng</span>
                          </div>
                        </div>
                        <div className="cau18">
                          <svg
                            className="cau19"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                          >
                            <path d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.745 18.745 49.137 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zm-22.627 45.255L271.196 475.314c-6.243 6.243-16.375 6.253-22.627 0L36.686 263.431A15.895 15.895 0 0 1 32 252.117V48c0-8.822 7.178-16 16-16h204.118c4.274 0 8.292 1.664 11.314 4.686l211.882 211.882c6.238 6.239 6.238 16.39 0 22.628zM144 124c11.028 0 20 8.972 20 20s-8.972 20-20 20-20-8.972-20-20 8.972-20 20-20m0-28c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z"></path>
                          </svg>
                          <div>
                            Thể loại:
                            <h6 style={{ display: "inline" }}>
                              {d.genre_name}
                            </h6>
                          </div>
                        </div>
                      </div>
                      <div className="cau15">
                        <div className="cau25">
                          <h4>{d.sale}đ</h4>
                        </div>
                        <div className="cau20">
                          <h6 className="cau21">{d.price}đ</h6>
                          <small className="cau22">
                            -{calculateDiscountPercentage(d.price, d.sale)}%
                          </small>
                        </div>
                      </div>
                    </div>

                    <input type="hidden" name="id" defaultValue={3} />
                    <input type="hidden" name="name" defaultValue="lienquan" />
                    <input
                      type="hidden"
                      name="img"
                      defaultValue="upload/N0GZiQn6gC2DEYAHAzFlAs2NPqFTzYOyuQOIra8d.jpg"
                    />
                    <input type="hidden" name="price" defaultValue={430} />
                    <div className="cau23" />
                    <style
                      dangerouslySetInnerHTML={{
                        __html:
                          '\n                           \n                         /* Định dạng nút "Mua ngay" */\n                        .cau26 {\n                            display: flex;\n                            align-items: center;\n                            background-color: #29b474;\n                            color: #fff;\n                            font-size: 18px;\n                            padding: 10px 20px;\n                            border: none;\n                            border-radius: 4px;\n                            cursor: pointer;\n                            transition: background-color 0.3s ease;\n                        }\n\n                        .cau26:hover {\n                            background-color: #1e8940;\n                        }\n\n                        /* Định dạng nút "Thêm vào giỏ hàng" */\n                        input[type="submit"][name="addtocart"] {\n                            display: flex;\n                            align-items: center;\n                            background-color: #fff;\n                            color: #29b474;\n                            font-size: 18px; /* Điều chỉnh kích thước font-size ở đây */\n                            padding: 10px 20px;\n                            border: 2px solid #29b474;\n                            border-radius: 4px;\n                            cursor: pointer;\n                            margin-left: 10px;\n                            transition: background-color 0.3s ease, color 0.3s ease;\n                        }\n\n                        input[type="submit"][name="addtocart"]:hover {\n                            background-color: #29b474;\n                            color: #fff;\n                        }\n\n                        ',
                      }}
                    />
                    <form
                      action="http://127.0.0.1:8000/save-cart/add/3"
                      method="POST"
                    >
                      <input
                        type="hidden"
                        name="_token"
                        defaultValue="okFLvcWiTl10J6qV5y8eTvRkAGZlxQgNtBXpuy0O"
                        autoComplete="off"
                      />
                      <fieldset className="cau13">
                        <div className="cau24">
                          <div
                            style={{
                              flex: 1,
                              display: "flex",
                              alignItems: "center",
                            }}
                          >
                            <label htmlFor="qty" style={{ marginRight: 10 }}>
                              Số lượng:
                            </label>
                            <input
                              type="number"
                              name="qty"
                              id="qty"
                              min={1}
                              defaultValue={1}
                              style={{
                                width: 80,
                                padding: 5,
                                border: "1px solid #ccc",
                              }}
                            />
                          </div>
                          <div style={{ flex: "1 1 0%" }}>
                            <input
                              type="hidden"
                              name="productid_hidden"
                              defaultValue={3}
                            />
                            <Link to="/giohang">
                              <input
                                type="submit"
                                name="addtocart"
                                defaultValue="Thêm vào giỏ hàng"
                              />
                            </Link>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                    {/* Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng */}
                  </div>
                </div>
              </div>
            ))}
            {/* Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng */}
            {/* Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng */}
            {/* Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng */}
            {/* Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng */}
            {/* Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng */}
            {/* Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng */}
            {/* Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng */}
          </div>

          <section>
            <div style={{ backgroundColor: "#fff" }}>
              <div className="cau2"></div>
            </div>
            <div className="cau2">
              <br />
              <br />
              <div className="cau60">
                <h4 className="cau61">Chi tiết sản phẩm</h4>
                <div className="cau62">
                  <div className="cau63">
                    <div>
                      {product.map((d, i) => (
                        <p>
                          {d.mota}
                          <span style={{ color: "#e74c3c" }}>
                            <strong> {d.sale}đ.</strong>
                          </span>
                        </p>
                      ))}
                      <p>&nbsp;</p>
                    </div>
                  </div>
                </div>
              </div>
              <br />
              <br />
              <br />
            </div>
          </section>
          <section>
            <div
              style={{
                marginLeft: "auto",
                marginRight: "auto",
                maxWidth: 1200,
              }}
            >
              <div className="taokhoangcachsanphamdacbiet">
                <div
                  style={{
                    marginTop: "2.5rem",
                    display: "flex",
                    justifyContent: "space-between",
                  }}
                >
                  <h4>Sản phẩm cùng loại</h4>
                  <br />
                  <br />
                </div>
              </div>
              <div>
                <div className="dinhdangthanghanggiuacacphan">
                  {relatedProducts.map((relatedProduct) => (
                    <div
                      key={relatedProduct.id}
                      style={{ minWidth: 0, flexBasis: "25%" }}
                    >
                      <Link to={`/sanpham/${relatedProduct.id}`}>
                        <img
                          loading="lazy"
                          src={"/storage/" + relatedProduct.img}
                          alt={relatedProduct.name}
                          style={{ height: 140 }}
                        />
                      </Link>
                      <Link
                        className="dieuchinhkhoangcachchusanphamnoibat"
                        to={`/sanpham/${relatedProduct.id}`}
                      >
                        {relatedProduct.name}
                      </Link>
                      <div className="dieuchinhkhoangcachgiasanphamchitiet">
                        <div className="giatienthanghang">
                          <div>{relatedProduct.sale}đ</div>
                          <div
                            style={{
                              color: "#9ca3af",
                              WebkitTextDecorationLine: "line-through",
                              textDecorationLine: "line-through",
                            }}
                          >
                            {relatedProduct.price}đ
                          </div>
                          <div>
                            <small className="dieuchinhphantramgiamgia">
                              -
                              {calculateDiscountPercentage(
                                relatedProduct.price,
                                relatedProduct.sale
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
              <br />
              <br />
              <br />
            </div>
          </section>
          <div className="row" id="binhluan" />
        </div>
      </div>
    </>
  );
};

export default SanPhamCT;
