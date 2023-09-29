import * as React from "react";
import { Component } from "react";
import { Link } from "react-router-dom";
import "./bill.css";
const Giohang = () => {
  return (
    <>
      <div>
        {/* Thêm JavaScript để cập nhật số lượng sản phẩm */}
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/demo2.css" />
        <div className="Mg W Re">
          <div className="ta jc Bd _f Ke">
            <div className="ta jc He ge">
              <div className="Ub ib Da zc Uc" />
              <div>Giỏ hàng</div>
            </div>
            <div className="Vb Gc" />
            <div className="ta jc He ie">
              <div className="Ub ib Da zc Uc" />
              <div>Xác nhận</div>
            </div>
            <div className="Vb Gc" />
            <div className="ta jc He ie">
              <div className="Ub ib Da zc Uc" />
              <div>Thanh toán</div>
            </div>
          </div>
          <div className="Ta Ug rd Zg Re Sg Sc">
            <div className="Og Pe">
              <div className="ih Oe">
                <div className="ta ic He">
                  <h3>Giỏ hàng</h3>
                </div>
                <div className="Fc sd xc">
                  <div className="Mf Me">
                    <div className="mg fh">
                      <img
                        loading="lazy"
                        src="http://127.0.0.1:8000/storage/upload/gYZ0iTslbehu3GDrNr0rvlvpGGowcQPR6punnAM9.jpg"
                        className="xc"
                        alt="Random Code Steam"
                      />
                    </div>
                    <div className="rg hh">
                      <div className="ta ec nc za">
                        <div className="Le">
                          <div className="Mf Ge">
                            <div className="ng ea Ce">
                              <h6> lead4dead2</h6>
                              <div className="fe">50tb </div>
                            </div>
                            <div className="lg If Ub ta Uf Vf De">
                              <h5>200đ</h5>
                              <div className="ta Tf jc De">
                                <div className="Zd he me">230đ</div>
                                <div>
                                  <small className="Zd aa Id Jd xc _c ke">
                                    -14%
                                  </small>
                                </div>
                              </div>
                            </div>
                            <div className="kg Jf ta Wf ga">
                              <form action="/api/cart/quantity">
                                <div className="ta Ga Fc Mc yc ge Zd">
                                  <button
                                    type="button"
                                    className="b Ub kb Hc Mc fe ra"
                                  >
                                    -
                                  </button>
                                  <input
                                    name="quantity"
                                    type="number"
                                    required
                                    min={1}
                                    max={30}
                                    step={1}
                                    placeholder="Số lượng"
                                    className="kb Zd Td Ac Ah"
                                    defaultValue={2}
                                  />
                                  <button
                                    type="button"
                                    className="b Ub kb Ic Mc fe ra"
                                  >
                                    +
                                  </button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div className="f Ad" />
                          <div className="ta nc Ee">
                            <div className="ta Ee">
                              <svg
                                className="od Cb Da"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                              >
                                <path d="M509.5 184.6L458.9 32.8C452.4 13.2 434.1 0 413.4 0H98.6c-20.7 0-39 13.2-45.5 32.8L2.5 184.6c-1.6 4.9-2.5 10-2.5 15.2V464c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V199.8c0-5.2-.8-10.3-2.5-15.2zM32 199.8c0-1.7.3-3.4.8-5.1L83.4 42.9C85.6 36.4 91.7 32 98.6 32H240v168H32v-.2zM480 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V232h448v232zm0-264H272V32h141.4c6.9 0 13 4.4 15.2 10.9l50.6 151.8c.5 1.6.8 3.3.8 5.1v.2z" />
                              </svg>
                              <div>
                                Tình trạng: <span className="be">Còn hàng</span>
                              </div>
                            </div>
                            <button type="button" className="b ta jc Ee de">
                              <svg
                                className="od Cb Da"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"
                              >
                                <path d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path>
                              </svg>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="Fc sd xc">
                  <div className="Mf Me">
                    <div className="mg fh">
                      <img
                        loading="lazy"
                        src="http://127.0.0.1:8000/storage/upload/N0GZiQn6gC2DEYAHAzFlAs2NPqFTzYOyuQOIra8d.jpg"
                        className="xc"
                        alt="Random Code Steam"
                      />
                    </div>
                    <div className="rg hh">
                      <div className="ta ec nc za">
                        <div className="Le">
                          <div className="Mf Ge">
                            <div className="ng ea Ce">
                              <h6> lienquan</h6>
                              <div className="fe">5RM </div>
                            </div>
                            <div className="lg If Ub ta Uf Vf De">
                              <h5>400đ</h5>
                              <div className="ta Tf jc De">
                                <div className="Zd he me">430đ</div>
                                <div>
                                  <small className="Zd aa Id Jd xc _c ke">
                                    -7%
                                  </small>
                                </div>
                              </div>
                            </div>
                            <div className="kg Jf ta Wf ga">
                              <form action="/api/cart/quantity">
                                <div className="ta Ga Fc Mc yc ge Zd">
                                  <button
                                    type="button"
                                    className="b Ub kb Hc Mc fe ra"
                                  >
                                    -
                                  </button>
                                  <input
                                    name="quantity"
                                    type="number"
                                    required
                                    min={1}
                                    max={30}
                                    step={1}
                                    placeholder="Số lượng"
                                    className="kb Zd Td Ac Ah"
                                    defaultValue={3}
                                  />
                                  <button
                                    type="button"
                                    className="b Ub kb Ic Mc fe ra"
                                  >
                                    +
                                  </button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div className="f Ad" />
                          <div className="ta nc Ee">
                            <div className="ta Ee">
                              <svg
                                className="od Cb Da"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                              >
                                <path d="M509.5 184.6L458.9 32.8C452.4 13.2 434.1 0 413.4 0H98.6c-20.7 0-39 13.2-45.5 32.8L2.5 184.6c-1.6 4.9-2.5 10-2.5 15.2V464c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V199.8c0-5.2-.8-10.3-2.5-15.2zM32 199.8c0-1.7.3-3.4.8-5.1L83.4 42.9C85.6 36.4 91.7 32 98.6 32H240v168H32v-.2zM480 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V232h448v232zm0-264H272V32h141.4c6.9 0 13 4.4 15.2 10.9l50.6 151.8c.5 1.6.8 3.3.8 5.1v.2z" />
                              </svg>
                              <div>
                                Tình trạng: <span className="be">Còn hàng</span>
                              </div>
                            </div>
                            <button type="button" className="b ta jc Ee de">
                              <svg
                                className="od Cb Da"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"
                              >
                                <path d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path>
                              </svg>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <h3>TỔNG TIỀN: 1600đ</h3>
                <div className="row">
                  <div className="col" style={{ position: "relative" }}>
                    <a href="http://127.0.0.1:8000/save-cart/delete">
                      <button type="button" style={{ color: "red" }}>
                        <svg
                          className="od Cb Da"
                          xmlns="http://www.w3.org/2000/svg"
                          style={{ height: 50 }}
                          viewBox="0 0 448 512"
                        >
                          <path d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z" />
                        </svg>
                      </button>
                    </a>

                    <Link to="/thanhtoan">
                      <span
                        className="col"
                        style={{ position: "absolute", right: 50 }}
                      >
                        <a href="http://127.0.0.1:8000/cart/purchase">
                          <button type="button">
                            <svg
                              className="od Cb Da"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 576 512"
                              style={{ height: "50px" }}
                            >
                              <path d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.96-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78 160z"></path>
                            </svg>
                          </button>
                        </a>
                      </span>
                    </Link>
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

export default Giohang;
