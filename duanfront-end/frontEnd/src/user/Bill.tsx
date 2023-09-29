import * as React from "react";
import { Component } from "react";
import "./bill.css";

const ThanhToan = () => {
  return (
    <>
      <div>
        {/* Thêm JavaScript để cập nhật số lượng sản phẩm */}
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/demo2.css" />
        <div className="Mg W Re">
          <div className="ta jc Bd _f Ke">
            <div className="ta jc He ie">
              <div className="Ub ib Da zc Uc" />
              <div>Giỏ hàng</div>
            </div>
            <div className="Vb Gc" />
            <div className="ta jc He ie">
              <div className="Ub ib Da zc Uc" />
              <div>Xác nhận</div>
            </div>
            <div className="Vb Gc" />
            <div className="ta jc He ge">
              <div className="Ub ib Da zc Uc" />
              <div>Thanh toán</div>
            </div>
          </div>
          <div className="Ta Ug rd Zg Re Sg Sc">
            <div className="Og Pe">
              <div className="ih Oe">
                <div className="ta ic He">
                  <h3>Hóa Đơn</h3>
                </div>
                <div className="card">
                  <div className="card-header">Chúc mừng!</div>
                  <div className="card-body">
                    <div className="alert alert-success" role="alert">
                      Bạn đã đặt hàng thành công!
                    </div>
                  </div>
                </div>
              </div>
              <div className="eh">
                <div className="Oe">
                  <div className="Ie">
                    <div className="ta nc jc He bc">
                      <h6>Bạn có mã giới thiệu?</h6>
                      <button type="button">
                        <svg
                          className="od b Hb Ba oa fe"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 448 512"
                        >
                          <path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div className="Ie">
                    <div className="ta nc jc He bc">
                      <h6>Bạn có mã ưu đãi?</h6>
                      <button type="button">
                        <svg
                          className="od b Hb Ba oa fe"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 384 512"
                        >
                          <path d="M96 224c53 0 96-43 96-96s-43-96-96-96S0 75 0 128s43 96 96 96zm0-144c26.5 0 48 21.5 48 48s-21.5 48-48 48-48-21.5-48-48 21.5-48 48-48zm192 208c-53 0-96 43-96 96s43 96 96 96 96-43 96-96-43-96-96-96zm0 144c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm93.9-381.2L57.2 475c-2.3 3.1-5.9 5-9.7 5H12c-9.6 0-15.3-10.7-10-18.7L327.2 37c2.3-3.1 5.9-5 9.7-5H372c9.6 0 15.3 10.8 9.9 18.8z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div className="Ie">
                    <div className="ta nc jc He bc">
                      <h6>Bạn muốn tặng cho bạn bè?</h6>
                      <button type="button">
                        <svg
                          className="od b Hb Ba oa fe"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                        >
                          <path d="M464 144h-26.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H48c-26.5 0-48 21.5-48 48v128c0 8.8 7.2 16 16 16h16v107.4c0 29 23.6 52.6 52.6 52.6h342.8c29 0 52.6-23.6 52.6-52.6V336h16c8.8 0 16-7.2 16-16V192c0-26.5-21.5-48-48-48zM232 448H84.6c-2.5 0-4.6-2-4.6-4.6V336h112v-48H48v-96h184v256zm-78.1-304c-22.1 0-40-17.9-40-40s17.9-40 40-40c22 0 37.5 7.6 84.1 77l2 3h-86.1zm122-3C322.5 71.6 338 64 360 64c22.1 0 40 17.9 40 40s-17.9 40-40 40h-86.1l2-3zM464 288H320v48h112v107.4c0 2.5-2 4.6-4.6 4.6H280V192h184v96z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <form className="Oe">
                    <div className="Le">
                      <h6>Thanh toán</h6>
                      <div className="Ie">
                        <div className="Fe">
                          <div className="ta Ee hc nc">
                            <div>Tổng giá trị sản phẩm</div>
                            <div>9.000đ</div>
                          </div>
                        </div>
                        <div className="f" />
                        <div className="Fe">
                          <div className="ta Ee hc nc">
                            <div>Tổng giá trị phải thanh toán</div>
                            <div className="Zd">9.000đ</div>
                          </div>
                          <div className="ta Ee hc nc">
                            <div>Số dư hiện tại</div>
                            <div className="Zd">0đ</div>
                          </div>
                          <div className="ta Ee hc nc">
                            <div>Số tiền cần nạp thêm</div>
                            <div className="Zd">9.000đ</div>
                          </div>
                        </div>
                      </div>
                      <fieldset className="ta ec kc Ie">
                        <a className="b c ta mc jc Ee" href="/topup">
                          <img
                            loading="lazy"
                            src="https://cdn.divineshop.vn/static/b1402e84a947ed36cebe9799e47f61c2.svg"
                            className="bb wa"
                            alt="Divine Shop"
                          />
                          <div>Nạp thêm vào tài khoản</div>
                        </a>
                        <button type="button" className="b c ta mc jc cd yf Df">
                          <div className="ta Ee rc">
                            <img
                              loading="lazy"
                              src="https://cdn.divineshop.vn/static/b77a2122717d76696bd2b87d7125fd47.svg"
                              className="Db wa"
                              alt="Mua siêu tốc với MoMo"
                            />
                            <div>Mua siêu tốc với MoMo</div>
                          </div>
                        </button>
                      </fieldset>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default ThanhToan;
