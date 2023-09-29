// TrangTimKiem.js
import React, { useEffect, useState } from "react";
import { useLocation, useParams } from "react-router-dom";

const TrangTimKiem = () => {
  const location = useLocation();
  const searchParams = new URLSearchParams(location.search);
  const selectedDanhMuc = searchParams.get("iddm");
  const searchQuery = searchParams.get("query");

  const [searchResults, setSearchResults] = useState([]);

  useEffect(() => {
    // Thực hiện tìm kiếm dựa trên selectedDanhMuc và searchQuery ở đây
    // Lưu kết quả vào setSearchResults
  }, [selectedDanhMuc, searchQuery]);

  return (
    <div>
      {/* Hiển thị kết quả tìm kiếm ở đây */}
      {searchResults.map((result) => (
        // Hiển thị kết quả tìm kiếm ở đây
      ))}
    </div>
  );
};

export default TrangTimKiem;
