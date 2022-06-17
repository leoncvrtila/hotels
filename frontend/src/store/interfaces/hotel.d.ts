 interface HotelInput {
  id: number;
  ["Hotel Name"]: string;
  Image: string;
  Address: string;
  City: string;
  Description: string;
  Stars: number;
  Latitude: number;
  Longitude: number;
  completed: boolean;
}

 interface HotelOutput {
  id: number;
  name: string;
  image: string;
  address: string;
  city: string;
  description: string;
  stars: number;
  latitude: number;
  longitude: number;
}

 interface HotelState {
  hotels: Hotel[];
  hotel: any;
  getHotels: () => void;
  getHotel: (id: number) => void;
}
