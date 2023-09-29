import React, { useState, useEffect } from "react";
import "./Slideshow.css";
import { Link } from "react-router-dom";

const Slideshow = ({ imgs }: { imgs: { id: number; img: string }[] }) => {
  const [index, setIndex] = useState(0);

  useEffect(() => {
    setIndex(0);
  }, [imgs]);

  const next = () => {
    if (index === imgs.length - 1) {
      setIndex(0);
    } else {
      setIndex(index + 1);
    }
  };

  const prev = () => {
    if (index === 0) {
      setIndex(imgs.length - 1);
    } else {
      setIndex(index - 1);
    }
  };

  useEffect(() => {
    const intervalId = setInterval(next, 3000); // Chuyển đổi sau mỗi 3 giây

    return () => {
      // Hủy bỏ interval khi component unmount
      clearInterval(intervalId);
    };
  });

  return (
    <div className="slideshow">
      {imgs.length > 0 ? (
        <Link to={`/sanpham/${imgs[index].id}`}>
          <img className="mainImg" src={imgs[index].img} alt="" />
        </Link>
      ) : (
        <div>No images available</div>
      )}
      <div className="actions">
        <button onClick={prev}>👈</button>
        <button onClick={next}>👉</button>
      </div>
    </div>
  );
};

export default Slideshow;
