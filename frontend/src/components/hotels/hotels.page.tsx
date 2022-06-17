import { Grid } from "@mui/material";
import * as React from "react";
import { useEffect, useCallback } from "react";
import { useStore } from "../../store/store";
import Hotel from "./hotel/hotel.component";

const Hotels = () => {
  const hotels = useStore((state) => state.hotels);
  const getHotels = useStore((state) => state.getHotels);

  useEffect(() => {
    getHotels();
  }, []);

  const hotelList = useCallback(
    (hotels: Hotel[]) => {
      return hotels?.map((hotel: Hotel) => {
        return (
          <Hotel
            key={hotel.id}
            id={hotel.id}
            name={hotel.name}
            image={hotel.image}
            address={hotel.address}
            city={hotel.city}
            description={hotel.description}
            stars={hotel.stars}
            latitude={hotel.latitude}
            longitude={hotel.longitude}
          />
        );
      })
    },
    [hotels]
  );

  return (
    <div className="hotels">
      <h1>Hotels</h1>
      <Grid container rowSpacing={4} columnSpacing={{ xs: 1, sm: 2, md: 3 }}>
        {hotelList(hotels)}
      </Grid>
    </div>
  );
};

export default Hotels;
