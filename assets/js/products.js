const products = [
  {
    productImg:
      "https://5.imimg.com/data5/SELLER/Default/2022/12/GP/BI/KM/148254360/industrial-commercial-ro-plant-500x500.jpg",
    productTitle: "Industrial Commercial RO Plant",
    productDescription:
      "Reverse Osmosis system can remove pollutants from water including lead, pesticides, fluoride, pharmaceuticals, arsenic and much more. And with a carbon filter, an RO system can also remove chlorine to improve the taste, odor and appearance of your water.",
  },
  {
    productImg:
      "https://5.imimg.com/data5/SELLER/Default/2022/12/JQ/GK/WI/148254360/70-kld-stp-plant-500x500.jpeg",
    productTitle: "Sewage Treatment Plant",
    productDescription:
      "STP plant treats the sewage to make it fit for safe disposal, agricultural use or domestic use in toilets etc. Sewage usually contains a high quantity of organic and inorganic wastes. It is essential to treat sewage before it enters into any water body.",
  },
  {
    productImg:
      "https://5.imimg.com/data5/SELLER/Default/2022/3/FH/XJ/JF/148254360/micron-cartage-filter-500x500.jpg",
    productTitle: "Cartridge Filter",
    productDescription:
      "Micron Cartridge Filter is used to filter the particles below 30-50 micron. Cartridge filtration units generally operate most effectively and economically on applications having contamination levels of less than 50 ppm.",
  },
  {
    productImg:
      "https://5.imimg.com/data5/SELLER/Default/2022/12/TD/KV/PY/148254360/frp-water-softener-500x500.jpg",
    productTitle: "Water Softener",
    productDescription:
      "A Water Softener is designed to remove hard water minerals and leave you with soft water. Water Softeners work by filtering out the minerals in hard water. When your water flows through the Water Softener, it removes calcium, magnesium and other minerals that cause really hard water.",
  },
  {
    productImg:
      "https://5.imimg.com/data5/SELLER/Default/2022/11/IE/ZT/KE/148254360/coarse-bubble-diffuser-500x500.jpg",
    productTitle: "Bubble Diffuser",
    productDescription:
      "Tube diffusers consist of a long, narrow plastic or ceramic cylinder surrounded by an EPDM rubber membrane. Again, the rubber expands as compressed air flows through it to open the tiny holes and release small-diameter bubbles into the wastewater.",
  },
  {
    productImg:
      "https://5.imimg.com/data5/SELLER/Default/2022/3/EM/SJ/MQ/148254360/tech-dose-dosing-pump-500x500.jpg",
    productTitle: "Dosing Pump",
    productDescription:
      "A diaphragm pump uses a flexible membrane instead of a piston or plunger to move fluid (Figure 1c). By expanding the diaphragm, the volume of the pumping chamber is increased and fluid is drawn into the pump. Compressing the diaphragm decreases the volume and expels some fluid.",
  },
  {
    productImg:
      "https://5.imimg.com/data5/SELLER/Default/2022/12/RE/XC/AG/148254360/pp-filter-press-500x500.jpg",
    productTitle: "Filter Press Machine",
    productDescription:
      "A filter press is one of the oldest and most trusted pieces of dewatering equipment. It's used for wastewater treatment across a variety of industries and applications. A filter press works by separating out solids from liquids, removing impurities, and suspended solids from industrial wastewater.",
  },
  {
    productImg:
      "https://5.imimg.com/data5/SELLER/Default/2022/10/OM/KM/DW/148254360/industrial-water-chiller-500x500.jpg",
    productTitle: "Industrial Chillers",
    productDescription:
      "Semi Automatic Industrial chillers are used for controlled cooling of products, mechanisms and machinery in a variety of industries. A chiller removes heat from the process water and transfers it to air via a heat exchanger.",
  },
  {
    productImg:
      "https://5.imimg.com/data5/SELLER/Default/2022/3/VM/DL/XJ/148254360/stp-control-panel-500x500.jpg",
    productTitle: "STP Control Panel",
    productDescription:
      "We are engrossed in dealing with STP Control Panel.We deliver our products with the best Quality.To get the best prices for these control Panels,kindly contact us.",
  },
  {
    productImg:
      "https://5.imimg.com/data5/ANDROID/Default/2022/3/SI/HX/SL/148254360/product-jpeg-500x500.jpg",
    productTitle: "Electromagnetic Flow Meter",
    productDescription:
      "Electromagnetic Digital Flow Meter when used for flow measurement for sewage sludge a special system is designed to prevent the buildup and carbonizing of sludge on the water electrodes. Such systems use self-heating principle to keep the metering body temperature at a level, ",
  },
  {
    productImg:
      "https://5.imimg.com/data5/SELLER/Default/2022/12/WN/CP/WP/148254360/bio-culture-bacteria-solution-500x500.jpg",
    productTitle: "Bio Culture Bacteria Solution",
    productDescription:
      "Furthermore, anaerobic bacteria are an important element in the wastewater treatment processes. They are responsible for methane fermentation of sewage sludge, facilitating decomposition of macromolecular organic matter into simpler compounds.",
  },
  {
    productImg:
      "https://5.imimg.com/data5/SELLER/Default/2022/3/DD/ZP/EQ/148254360/air-pollution-control-machine-500x500.jpeg",
    productTitle: "Air And Water Pollution Control Machine",
    productDescription:
      "Air And Water Pollution Control Machine to collect and remove dry particulates and contaminants, such as dust, pollen, microbes, chemicals, etc. from air passing through them. These devices are utilized in residential, commercial, and industrial applications to remove pollutants from exhaust air and improve the air quality within the work environment.",
  },
];

// main code
const slider = document.querySelector(".slider");

products.forEach((item) => {
  const slide = document.createElement("div");
  slide.innerHTML = `  <div class="item">
  <div class="grids4-info">
    <a href="#"><img class="img-fluid product-img" src=${item.productImg} alt="" /></a>
    <div class="info-bg">
      <h5><a href="#">${item.productTitle}</a></h5>
      <span class="price">Price: negotiable</span>
      <p class="product-description">${item.productDescription}</p>
      <a href="#" class="product-visit_btn">Visit Product</a>
    </div>
  </div>
</div>`;
  slider.append(slide);
});

const reviews = [
  {
    userImg: "http://www.newtonpower.in/images/logo.png",
    userName: "Alina",
    UserReview:
      "This company has been a great help to my company. I have used them multiple times and had great results. They really treat their customers with respect and honesty. I have a lot of plants and they take care of them really well. I use them for my office and they are the best I've ever used",
    CompanyName: "Newton Power Infrastructure",
    reviewTitle: "My very honest review for Gokul-Water",
  },
  {
    userImg:
      "https://images.statusfacebook.com/profile_pictures/real-desi-girls/real-desi-girls-dp-profile-pictures-for-whatsapp-facebook-01.jpg",
    userName: "Nidhi",
    UserReview:
      "I have a sump pit in my backyard that has been leaking for over a year. I had tried several different types of filters and there was never a lasting solution. I was starting to feel hopeless and was sure that I would have to replace my sump pit. I had a friend recommended me to Sewage Treatment Plant and I am so happy he did. I am not sure if it is because I live in the city or not, but we did not have to dig sump pit",
    CompanyName: "IsranaComputers",
    reviewTitle: "Review to show gokul-waters real value",
  },
];
const reviewsContainer = document.getElementById("owl-agency");

reviews.forEach((review) => {
  const slide = document.createElement("div");
  slide.innerHTML = `<div class="item">
  <div class="testimonial-content">
    <div class="testimonial">
      <a class="comment-img" href="#url"><img src=${review.userImg} class="img-responsive"
          alt="placeholder image"></a>
      <blockquote>
        <q>${review.reviewTitle}</q>
      </blockquote>
      <p>${review.UserReview}</p>
      <div class="text-center mt-4">
        <div class="people-info align-self">
          <h3>${review.userName}</h3>
          <p class="indentity text-center">${review.CompanyName}</p>
        </div>
      </div>
    </div>
  </div>
</div>`;
  reviewsContainer.append(slide);
});
