import * as React from "react";
import { Component } from "react";

const Footer_user = () => {
  return (
    <>
      <div>
        <div style={{ backgroundColor: "#fff" }}>
          <div className="cau2">
            <a className="thanghangbieutuongthanhtoan" href="_blank">
              <img
                loading="lazy"
                src="https://cdn.divineshop.vn/static/b77a2122717d76696bd2b87d7125fd47.svg"
                style={{ height: "1.75rem" }}
                alt="Ví MoMo"
                title="Ví MoMo"
              />
              <img
                loading="lazy"
                src="https://cdn.divineshop.vn/static/72a3a36fc7c66085b3f442940ba45fde.svg"
                alt="Mobile Banking với VnPay"
                title="Mobile Banking với VnPay"
                style={{ marginLeft: "0.75rem", height: "1.75rem" }}
              />
              <img
                loading="lazy"
                src="https://cdn.divineshop.vn/static/464c7c79044dea88e86adf0e1b9c064c.svg"
                alt="Thẻ VISA"
                title="Thẻ VISA"
                style={{ marginLeft: "0.75rem", height: "1.75rem" }}
              />
              <img
                loading="lazy"
                src="https://cdn.divineshop.vn/static/ddb866eb1214c914ea62417879046b99.svg"
                alt="Thẻ Mastercard"
                title="Thẻ Mastercard"
                style={{ marginLeft: "0.75rem", height: "1.75rem" }}
              />
              <small style={{ marginLeft: "0.75rem" }}>
                và nhiều hình thức thanh toán khác
              </small>
            </a>
          </div>
        </div>
        <div className="cau2">
          <div className="thanghangmangxahoi">
            <a
              href="_blank"
              target="_blank"
              rel="noreferrer"
              style={{ display: "block" }}
            >
              <img
                loading="lazy"
                src="https://cdn.divineshop.vn/static/4ba68c7a47305b454732e1a9e9beb8a1.svg"
                style={{ height: "1.75rem" }}
                alt="Facebook"
                title="Facebook"
              />
            </a>
            <a
              href="_blank"
              target="_blank"
              rel="noreferrer"
              style={{ marginLeft: "0.75rem", display: "block" }}
            >
              <img
                loading="lazy"
                src="https://cdn.divineshop.vn/static/20334129395885adefc2e5217043f670.svg"
                style={{ height: "1.75rem" }}
                alt="Youtube"
                title="Youtube"
              />
            </a>
            <a
              href="_blank"
              target="_blank"
              rel="noreferrer"
              style={{ display: "block" }}
            >
              <img
                loading="lazy"
                src="https://cdn.divineshop.vn/static/4ae438165f9d5ea0fc6ff3da6051f938.svg"
                alt="Instagram"
                title="Instagram"
                style={{ marginLeft: "0.75rem", height: "1.75rem" }}
              />
            </a>
          </div>
          <div style={{ borderTopWidth: 1, height: 1, width: "100%" }} />
          <hr style={{ borderColor: "#ffffff" }} />
          <div style={{ paddingBottom: "1.25rem", paddingTop: "1.25rem" }}>
            <div className="dieuchinhbieutuonglogo">
              <div
                className="dieuchinhbieutuonglogo"
                style={{ padding: "0.5rem" }}
              >
                <div style={{ minWidth: "18rem" }}>
                  <div style={{ textTransform: "uppercase" }}>Giới thiệu</div>
                  <div className="chocacchuxuonghang">
                    <a
                      href="_blank"
                      target="_blank"
                      rel="noreferrer"
                      style={{ marginTop: "0.25rem" }}
                    >
                      Game bản quyền là gì?
                    </a>
                    <a
                      href="_blank"
                      target="_blank"
                      rel="noreferrer"
                      style={{ marginTop: "0.25rem" }}
                    >
                      Giới thiệu Divine Shop
                    </a>
                    <a
                      href="_blank"
                      target="_blank"
                      rel="noreferrer"
                      style={{ marginTop: "0.25rem" }}
                    >
                      Điều khoản dịch vụ
                    </a>
                    <a
                      href="_blank"
                      target="_blank"
                      rel="noreferrer"
                      style={{ marginTop: "0.25rem" }}
                    >
                      Chính sách bảo mật
                    </a>
                  </div>
                </div>
                <div style={{ minWidth: "15rem" }}>
                  <div style={{ textTransform: "uppercase" }}>Tài khoản</div>
                  <div className="chocacchuxuonghang">
                    <a href="http://127.0.0.1:8000/login">
                      <div style={{ marginTop: "0.25rem" }}>Đăng nhập</div>
                    </a>
                    <a
                      href="http://127.0.0.1:8000/register"
                      style={{ marginTop: "0.25rem" }}
                    >
                      Đăng ký
                    </a>
                  </div>
                </div>
                <div style={{ minWidth: "20rem" }}>
                  <div style={{ textTransform: "uppercase" }}>Liên hệ</div>
                  <div className="chocacchuxuonghang">
                    <div style={{ marginTop: "0.25rem" }}>
                      <div>
                        Hotline tự động
                        <a
                          href="_blank"
                          style={{ fontWeight: 500, color: "#dc3545" }}
                        >
                          1900 633 305
                        </a>
                      </div>
                    </div>
                    <a href="_blank" target="_blank" rel="noreferrer">
                      Liên hệ Hỗ trợ
                    </a>
                    <a href="_blank" target="_blank" rel="noreferrer">
                      Chat với CSKH
                    </a>
                  </div>
                </div>
              </div>
              <a href="_blank" title="DMCA.com Protection Status">
                <img
                  loading="lazy"
                  src="https://images.dmca.com/Badges/_dmca_premi_badge_2.png?ID=18522dc6-fdd6-4b49-ab40-395a79849050"
                  className="jb Fa"
                  alt="DMCA.com Protection Status"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default Footer_user;
