import * as React from "react";
import { FunctionComponent } from "react";
import {
  Button,
  Card,
  CardActions,
  CardContent,
  CardMedia,
  Grid,
  IconButton,
  Typography,
} from "@mui/material";
import FavoriteIcon from "@mui/icons-material/Favorite";
import ShareIcon from "@mui/icons-material/Share";
import { Link } from "react-router-dom";
import { starsImgs } from "../../../core/shared/functions";

const Hotel: FunctionComponent<Hotel> = ({ id, name, image, city, stars }) => {
  return (
    <Grid item xs={3} className="hotel">
      <Card>
        <CardMedia component="img" alt={name} image={image} />
        <CardContent>
          <Typography variant="h5" component="div">
            {name}
          </Typography>
          <Typography
            className="hotel__subtitle"
            gutterBottom
            variant="subtitle1"
            component="div"
          >
            <span>{city}</span>
            <span>{starsImgs(stars)}</span>
          </Typography>
        </CardContent>
        <CardActions className="hotel__actions">
          <Link to={`/hotel/${id}`}>
            <Button size="small" type="button">
              Learn More
            </Button>
          </Link>

          <div>
            <IconButton aria-label="add to favorites">
              <FavoriteIcon />
            </IconButton>
            <IconButton aria-label="share">
              <ShareIcon />
            </IconButton>
          </div>
        </CardActions>
      </Card>
    </Grid>
  );
};

export default Hotel;
