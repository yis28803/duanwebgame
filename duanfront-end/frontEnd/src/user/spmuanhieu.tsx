import * as React from "react";
import { Component } from "react";

const SPMuaNhieu = () => {
  return (
    <>
      <div className="a W Oe">
        <h2>Sản phẩm bạn đã xem</h2>
        <form>
          <div className="ta gc jc Je">
            <div className="af vh">
              <div className="ta gc Je">
                <div className="af og Fg">
                  <div className="z">
                    <select className="g j gd h i" name="category_id">
                      <option value>Tất cả</option>
                      <option value={64}>Account Steam </option>
                      <option value={69}>Adobe</option>
                      {/* Các tùy chọn danh mục khác */}
                    </select>
                    <label>Danh mục</label>
                  </div>
                </div>
                <div className="af og Gg">
                  <div className="z">
                    <select className="g j gd h i" name="tag">
                      <option value>Tất cả</option>
                      <option value="3ds max">3ds Max</option>
                      <option value="3tl">3tl</option>
                      {/* Các tùy chọn thể loại khác */}
                    </select>
                    <label>Thể loại</label>
                  </div>
                </div>
                <div className="af og Jg">
                  {/* Các tùy chọn khác như mức giá và sắp xếp */}
                </div>
              </div>
            </div>
          </div>
          <div className="nh">
            <button type="submit" className="b c ta jc db Bd Ee">
              <svg
                className="od Cb Da"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
              >
                <path d="M479.968 0H32.038C3.613 0-10.729 34.487 9.41 54.627L192 237.255V424a31.996 31.996 0 0 0 10.928 24.082l64 55.983c20.438 17.883 53.072 3.68 53.072-24.082V237.255L502.595 54.627C522.695 34.528 508.45 0 479.968 0zM288 224v256l-64-56V224L32 32h448L288 224z"></path>
              </svg>
              <div>Lọc</div>
            </button>
          </div>
          <a className="ta Ee de" href="">
            <svg
              className="od Cb Da"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"
            >
              {/* Biểu tượng khôi phục bộ lọc */}
            </svg>
            <div>Khôi phục bộ lọc</div>
          </a>
        </form>
        <div className="ta ec kc Jc Qd Le">
          <div className="ta gc Pe">
            <div className="_e mg dh">
              <a className="lf gf ff ra" tabIndex={-1} href="">
                <img
                  loading="lazy"
                  src="https://cdn.divineshop.vn/image/catalog/Anh-SP-New/Steam wallet new/STEAM 80 HKD.png?hash=1622878183"
                  className="xc"
                  alt="Steam Wallet Code 80 HKD"
                />
              </a>
              <a className="Ua Ra bf ia rc tc ra" href="">
                Steam Wallet Code 80 HKD (~249.760 VNĐ)
              </a>
              <div className="ta Ua ja">
                <div className="Vb ta gc De jc">
                  <div className="Zd">260.000đ</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default SPMuaNhieu;
