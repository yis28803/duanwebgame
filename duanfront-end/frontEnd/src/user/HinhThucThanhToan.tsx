import React from "react";

// Tạo một React component cho phần tiêu đề
function Title({ amount }) {
  return (
    <div>
      <h4>Nạp tiền vào tài khoản</h4>
      <div className="la">
        Số tiền cần nạp thêm để thanh toán đơn hàng:{" "}
        <span className="Zd de">{amount}</span>
      </div>
    </div>
  );
}

// Tạo một React component cho mỗi phương thức thanh toán
function PaymentMethod({ imageSrc, altText, title, description }) {
  return (
    <div className="ag xd bc">
      <div className="ta jc Ke">
        <img
          loading="lazy"
          src={imageSrc}
          className="Ub tb La xc"
          alt={altText}
        />
        <div className="Ce">
          <h6 className="Va">{title}</h6>
          <small className="Wa fe ra">{description}</small>
        </div>
      </div>
    </div>
  );
}

// Tạo component gốc
function PaymentOptions() {
  return (
    <div className="Mg">
      <div className="W Ug rd Zg Re Sg Sc">
        <Title amount="9.000đ" />

        <div className="ta ec">
          <PaymentMethod
            imageSrc="https://cdn.divineshop.vn/image/catalog/Logo-bank/bank.png?hash=1604888771"
            altText="Chuyển Khoản Ngân Hàng 24/7"
            title="Chuyển Khoản Ngân Hàng 24/7"
            description="Chuyển khoản ngân hàng online hoặc tại quầy giao dịch"
          />

          <PaymentMethod
            imageSrc="https://cdn.divineshop.vn/image/catalog/icon/Image 2022-06-24-1656046250-88939.png?hash=1656046385"
            altText="Thanh toán VNPAY-QR qua EPAY"
            title="Thanh toán VNPAY-QR qua EPAY"
            description="Quét mã QR PAY trên ứng dụng Mobile Banking, phí giao dịch 2%"
          />

          {/* Thêm các phương thức thanh toán khác ở đây */}
        </div>
      </div>
    </div>
  );
}

export default PaymentOptions;
