import {
  Button,
  Card,
  CardContent,
  CardMedia,
  Typography,
} from "@mui/material";
import * as React from "react";
import { useParams, useNavigate } from "react-router-dom";
import KeyboardArrowLeftIcon from "@mui/icons-material/KeyboardArrowLeft";
import { useStore } from "../../../store/store";
import { useEffect, useState } from "react";
import L from "leaflet";
import { starsImgs } from "../../../core/shared/functions";

const HotelDetails = () => {
  const { id } = useParams() as any;
  const navigate = useNavigate();
  const hotel = useStore((state) => state.hotel);
  const getHotel = useStore((state) => state.getHotel);
  const [coordinates, setCoordinates] = useState([]) as any;
  const [isMapLoaded, setIsMapLoaded] = useState(false);

  let map: any;
  let marker: any;
  let myIcon: any;

  useEffect(() => {
    getHotel(+id);
  }, []);

  useEffect(() => {
    if (hotel) {
      setCoordinates([hotel.latitude, hotel.longitude]);
    }
  }, [hotel]);

  useEffect(() => {
    if (coordinates && coordinates[0] && !isMapLoaded) {
      map = L.map("map").setView(coordinates, 10);
      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: "",
      }).addTo(map);

      myIcon = L.icon({
        iconUrl: require("../../../core/icons/marker.png"),
        iconSize: [50, 50],
        iconAnchor: [22, 94],
        popupAnchor: [-3, -76],
        shadowUrl: "",
        shadowSize: [68, 95],
        shadowAnchor: [22, 94],
      });

      marker = L.marker(coordinates, { icon: myIcon }).addTo(map);

      setIsMapLoaded(true);
    }
  }, [coordinates]);

  return (
    <div className="hotel-details">
      <Button onClick={() => navigate(-1)} size="small" type="button">
        <KeyboardArrowLeftIcon />
        Go back
      </Button>
      <h1>Hotel Details</h1>

      {hotel && (
        <Card>
          <CardMedia component="img" alt={hotel.name} image={hotel.image} />
          <CardContent>
            <Typography variant="h5" component="div">
              {hotel.name}
            </Typography>
            <Typography
              className="hotel__subtitle"
              gutterBottom
              variant="subtitle1"
              component="div"
            >
              <span>{hotel.city}</span>
              <span>{starsImgs(hotel.stars)}</span>
            </Typography>
            <Typography variant="subtitle2">{hotel.address}</Typography>
            <Typography>{hotel.description}</Typography>
            <div id="map" className="hotel-details__map"></div>
          </CardContent>
        </Card>
      )}
    </div>
  );
};

export default HotelDetails;
