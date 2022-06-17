import create from "zustand";

export const useStore = create<HotelState>((set) => ({
  hotels: [] as HotelOutput[],
  hotel: {} as HotelOutput,

  getHotels: async () => {
    const response = await fetch("http://localhost:8000/api/hotels");
    const data = await response.json();

    const formatedData =
      data &&
      data.hotels.map((hotel: HotelInput, index: number) => {
        return {
          id: index,
          address: hotel.Address,
          city: hotel.City,
          description: hotel.Description,
          name: hotel["Hotel Name"],
          image: hotel.Image,
          stars: hotel.Stars,
          latitude: hotel.Latitude,
          longitude: hotel.Longitude,
        };
      });

    set({ hotels: formatedData });
  },
  getHotel: async (id: number) => {
    const response = await fetch(`http://localhost:8000/api/hotels/${id}`);
    const data = await response.json();

    const formatedData = {
      id: data[0].id,
      address: data[0].Address,
      city: data[0].City,
      description: data[0].Description,
      name: data[0]["Hotel Name"],
      image: data[0].Image,
      stars: data[0].Stars,
      latitude: data[0].Latitude,
      longitude: data[0].Longitude,
    };

    set({ hotel: formatedData });
  },
}));
