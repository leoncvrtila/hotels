import StarIcon from "@mui/icons-material/Star";

export const starsImgs = (stars: any) => {
  const newStars = [];
  for (let i = 0; i < stars; i++) {
    newStars.push(<StarIcon key={i} />);
  }
  return newStars;
};
