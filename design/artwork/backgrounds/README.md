# Backgrounds

The `/design/artwork/backgrounds` folder contains `jpg` files to be included in `body-background.php` file using `mrg_pict_random` function.

Because these images are truly binary, they are ignored in the versioning control system.

--------------------------------------------------------------------------------

The [GIMP](https://www.gimp.org/) process for preparing these files is collated below:

1. Tools → Selection Tools → Rectangle Select:

  - Fixed Aspect Ratio: `16:9`

2. Image → Crop to Selection

3. Image → Scale Image:

  - Width: `1920`
  - Height: `1080`
  - Resolution: `300`

4. Filters → Enhance → Sharpen

  - Sharpness : `50`

5. File → Export As

  - Quality: `>= 75%`
  - File size: `<= 400 Ko`
  - Advanced :

    - Optimize
    - Progressive
