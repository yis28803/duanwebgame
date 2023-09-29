import * as React from "react";
import { Component } from "react";
import { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import { useParams } from "react-router-dom";
import Slideshow from "./slideshow";
import "./Home.css";
// import { useState, useEffect } from "react";
// {"storage/" + d.img}

const HomeUser = () => {
  const calculateDiscountPercentage = (price, sale) => {
    const discountPercentage = ((price - sale) / price) * 100;
    return `${Math.floor(discountPercentage)}`;
  };

  const [data1, setData1] = useState([]);
  const [data2, setData2] = useState([]);

  useEffect(() => {
    // Lấy dữ liệu cho bảng thứ nhất
    fetch("http://localhost:8082/sanpham")
      .then((res) => res.json())
      .then((data) => setData1(data))
      .catch((err) => console.log(err));

    // Lấy dữ liệu cho bảng thứ hai
    fetch("http://localhost:8082/danhmuc")
      .then((res) => res.json())
      .then((data) => setData2(data))
      .catch((err) => console.log(err));
  }, []);

  // Xử lý sự kiện khi click
  const handleSlideChange = (direction) => {
    // Xử lý thay đổi slide ở đây
  };

  return (
    <>
      <div>
        {/* Thêm JavaScript để cập nhật số lượng sản phẩm */}

        <div className="taokhoangcachgiuacacphan">
          <div className="cau2">
            <div className="dinhdangthanghanggiuacacphan">
              <div style={{ flexBasis: "20.83333333%", height: 320 }}>
                <div className="dinhdangphongtodanhmuc">
                  {/* lamphanbieutuong */}
                  {/* lamphanbieutuong */}
                  {/* lamphanbieutuong */}
                  {/* lamphanbieutuong */}
                  {/* lamphanbieutuong */}

                  {data2.slice(0, 10).map((product, i) => (
                    <Link
                      key={i}
                      className="bieutuongvachudanhmucthangngang"
                      data-ea="menu_click__0"
                      to={`/sanphamdanhmuc/${product.id}`} // Sử dụng Link thay vì href
                    >
                      <i
                        className={product.bieutuong}
                        style={{
                          marginRight: "0.5rem",
                          minWidth: "1.5rem",
                          height: "1.25rem",
                          opacity: "0.5",
                        }}
                      />
                      <div>{product.name_dm}</div>
                    </Link>
                  ))}
                </div>
              </div>
              <div style={{ flexBasis: "54.16666667%", minWidth: 0 }}>
                <div className="dieuchinhbenngoaiphanslidedown">
                  <div className="gophinhanhslidedown">
                    <div className="slideshow-container">
                      <div className="App">
                        <Slideshow
                          imgs={data1.slice(1, 7).map((product) => ({
                            id: product.id,
                            img: "storage/" + product.img,
                          }))}
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              {/* kasjdlajjdlksajkldjkla */}
              {/* kasjdlajjdlksajkldjkla */}
              {/* kasjdlajjdlksajkldjkla */}
              {/* kasjdlajjdlksajkldjkla */}
              {/* kasjdlajjdlksajkldjkla */}

              <div style={{ minWidth: 0, flexBasis: "25%" }}>
                <div className="dinhdangthanghanggiuacacphan">
                  <div style={{ flexBasis: "100%", minWidth: 0 }}>
                    <Link to="/sanphamdanhmuc/1">
                      <img
                        src={"img/Random Code Steam Legendary-78055.png"}
                        alt="/search?q=vpn"
                        style={{ height: 140 }}
                      />
                    </Link>
                  </div>
                  <div style={{ flexBasis: "100%", minWidth: 0 }}>
                    <Link to="/sanphamdanhmuc/2">
                      <img
                        src={"img/Random Code Steam.png"}
                        alt="/search?q=nghe+nhạc"
                        style={{ height: 140 }}
                      />
                    </Link>
                  </div>
                </div>
              </div>
            </div>
            <div style={{ paddingTop: "1.5rem" }}>
              <div className="dinhdangthanghanggiuacacphan">
                <div style={{ flexBasis: "25%", minWidth: 0 }}>
                  <Link to="/sanphamdanhmuc/3">
                    <img src={"img/STEAM 50 HKD.png"} />
                  </Link>
                </div>
                <div style={{ flexBasis: "25%", minWidth: 0 }}>
                  <Link to="/sanphamdanhmuc/4">
                    <img src={"img/STEAM 80 HKD.png"} />
                  </Link>
                </div>
                <div style={{ flexBasis: "25%", minWidth: 0 }}>
                  <Link to="/sanphamdanhmuc/5">
                    <img src={"img/STEAM 100 TWD.png"} />
                  </Link>
                </div>
                <div style={{ flexBasis: "25%", minWidth: 0 }}>
                  <Link to="/sanphamdanhmuc/6">
                    <img src={"img/STEAM40hkd-81992.png"} />
                  </Link>
                </div>
              </div>
            </div>

            {/* kasjdlajjdlksajkldjkla */}
            {/* kasjdlajjdlksajkldjkla */}
            {/* kasjdlajjdlksajkldjkla */}
            {/* kasjdlajjdlksajkldjkla */}
            {/* kasjdlajjdlksajkldjkla */}
            {/* kasjdlajjdlksajkldjkla */}
          </div>
          <div className="dinhdangsanphamdacbiet">
            <div className="taokhoangcachsanphamdacbiet">
              <div
                style={{
                  marginTop: "2.5rem",
                  display: "flex",
                  justifyContent: "space-between",
                }}
              >
                <h4>Sản phẩm nổi bật</h4>
                <a className="dieuchinhnutkhampha" href="_blank">
                  Khám phá
                </a>
              </div>
              <div>
                Danh sách những sản phẩm theo xu hướng mà có thể bạn sẽ thích
              </div>
            </div>
            <div>
              <div className="dinhdangthanghanggiuacacphan">
                {data1.slice(0, 12).map((product, i) => (
                  <div key={i} style={{ minWidth: 0, flexBasis: "25%" }}>
                    <Link to={`/sanpham/${product.id}`}>
                      <img
                        loading="lazy"
                        src={"/storage/" + product.img}
                        alt={product.name}
                        style={{ height: 140, width: 280 }}
                      />
                      <a
                        className="dieuchinhkhoangcachchusanphamnoibat"
                        href=""
                      >
                        {product.name}
                      </a>
                    </Link>
                    <div className="dieuchinhkhoangcachgiasanphamchitiet">
                      <div className="giatienthanghang">
                        <div>{product.sale}đ</div>
                        <div
                          style={{
                            color: "#9ca3af",
                            WebkitTextDecorationLine: "line-through",
                            textDecorationLine: "line-through",
                          }}
                        >
                          {product.price}đ
                        </div>
                        <div>
                          <small className="dieuchinhphantramgiamgia">
                            -
                            {calculateDiscountPercentage(
                              product.price,
                              product.sale
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
          <div className="thutieude">
            <h4>Từ khóa nổi bật</h4>
            <div>
              <Link to="/sanphamdanhmuc/1">
                <div className="dinhdangthanghanggiuacacphan">
                  <h6 className="dieuchinhnuttukhoanoibat">
                    <a
                      className="dieuchinhhinhdangnuttukhoanoibat"
                      style={{ backgroundColor: "#3d5a80" }}
                      href="http://127.0.0.1:8000/sanphamdanhmuc/1"
                    >
                      <div
                        style={{
                          display: "flex",
                          justifyContent: "center",
                          alignItems: "center",
                        }}
                      >
                        Làm việc
                      </div>
                    </a>
                  </h6>

                  <h6 className="dieuchinhnuttukhoanoibat">
                    <a
                      className="dieuchinhhinhdangnuttukhoanoibat"
                      style={{ backgroundColor: "#98c1d9" }}
                      href="http://127.0.0.1:8000/sanphamdanhmuc/2"
                    >
                      <div
                        style={{
                          display: "flex",
                          justifyContent: "center",
                          alignItems: "center",
                        }}
                      >
                        Giải trí
                      </div>
                    </a>
                  </h6>
                  <h6 className="dieuchinhnuttukhoanoibat">
                    <a
                      className="dieuchinhhinhdangnuttukhoanoibat"
                      style={{ backgroundColor: "#ee6c4d" }}
                      href="http://127.0.0.1:8000/sanphamdanhmuc/3"
                    >
                      <div
                        style={{
                          display: "flex",
                          justifyContent: "center",
                          alignItems: "center",
                        }}
                      >
                        Học tập
                      </div>
                    </a>
                  </h6>
                  <h6 className="dieuchinhnuttukhoanoibat">
                    <a
                      className="dieuchinhhinhdangnuttukhoanoibat"
                      style={{ backgroundColor: "#293241" }}
                      href="http://127.0.0.1:8000/sanphamdanhmuc/4"
                    >
                      <div
                        style={{
                          display: "flex",
                          justifyContent: "center",
                          alignItems: "center",
                        }}
                      >
                        Spotify
                      </div>
                    </a>
                  </h6>
                  <h6 className="dieuchinhnuttukhoanoibat">
                    <a
                      className="dieuchinhhinhdangnuttukhoanoibat"
                      style={{ backgroundColor: "#545b67" }}
                      href="http://127.0.0.1:8000/sanphamdanhmuc/5"
                    >
                      <div
                        style={{
                          display: "flex",
                          justifyContent: "center",
                          alignItems: "center",
                        }}
                      >
                        Wallet
                      </div>
                    </a>
                  </h6>
                  <h6 className="dieuchinhnuttukhoanoibat">
                    <a
                      className="dieuchinhhinhdangnuttukhoanoibat"
                      style={{ backgroundColor: "#767c85" }}
                      href="http://127.0.0.1:8000/sanphamdanhmuc/6"
                    >
                      <div
                        style={{
                          display: "flex",
                          justifyContent: "center",
                          alignItems: "center",
                        }}
                      >
                        Youtube
                      </div>
                    </a>
                  </h6>
                </div>
              </Link>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default HomeUser;
