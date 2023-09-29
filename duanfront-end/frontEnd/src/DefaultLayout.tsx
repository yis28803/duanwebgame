import * as React from "react";
import { Route, Routes } from "react-router-dom";

import { Component } from "react";
import Header_user from "./layouts/Nguoidung_Header";
import Footer_user from "./layouts/Nguoidung_Footer";
import Loi404 from "./user/404";
import HomeUser from "./user/Home";
import Giohang from "./user/GioHang";
import ThanhToan from "./user/Bill";
import SanPhamCT from "./user/SanPhamCT";
import SanPhamDanhMuc from "./user/SanPhamDanhMuc";
import SPXemNhieu from "./user/spxemnhieu";
import SPMuaNhieu from "./user/spmuanhieu";
import SPKhuyenMai from "./user/spkhuyenmai";
import DaiLyGiaoDich from "./user/dailygiaodich";
import PaymentOptions from "./user/HinhThucThanhToan";
const DefaultLayout = () => {
  return (
    <>
      <Header_user />
      <Routes>
        <Route path="" element={<HomeUser />} />
        <Route path="home" element={<HomeUser />} />
        {/* <Route path="sanphamct" element={<SanPhamCT />} /> */}
        <Route path="sanpham/:productId" element={<SanPhamCT />} />
        <Route path="sanphamdanhmuc/:productId" element={<SanPhamDanhMuc />} />
        <Route path="giohang" element={<Giohang />} />
        <Route path="spxemnhieu" element={<SPXemNhieu />} />
        <Route path="spmuanhieu" element={<SPMuaNhieu />} />
        <Route path="hinhthucthanhtoan" element={<PaymentOptions />} />
        <Route path="dailygiaodich" element={<DaiLyGiaoDich />} />
        <Route path="spkhuyenmai" element={<SPKhuyenMai />} />
        <Route path="thanhtoan" element={<ThanhToan />} />
        <Route path="_blank" element={<Loi404 />} />
      </Routes>
      <Footer_user />
    </>
  );
};

export default DefaultLayout;
