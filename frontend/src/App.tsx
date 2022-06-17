import { Home } from "@mui/icons-material";
import React from "react";
import { Routes, Route } from "react-router-dom";
import HotelDetails from "./components/hotels/hotel-details/hotel-details.page";
import Hotels from "./components/hotels/hotels.page";

function App() {
  return (
    <div className="App">
      <Routes>
        <Route path="/" element={<Hotels />} />
        <Route path="/hotel/:id" element={<HotelDetails />} />
      </Routes>
    </div>
  );
}

export default App;
