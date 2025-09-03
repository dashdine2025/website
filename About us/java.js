
  const platillos = [
"Aguacate","Arroz con pollo","Albóndigas","Almendras","Arepas","Arroz con leche","Ajoblanco","Anchoas","Apio","Apricot","Avena","Artichoke","Asparagus","Ajiaco","Apple","Antipasto","Ajvar","Atún","Avena cocida","Alcaparras",
"Banana","Bistec","Broccoli","Bacalao","Baguette","Brownie","Berenjena","Bagel","Biryani","Burrito","Blinis","Basil","Buñuelos","Black beans","Blueberry","Barley","Baklava","Brocheta","Broccoli rabe","Brócoli",
"Cabbage","Carrot","Cauliflower","Cucumber","Cheddar","Chorizo","Cupcake","Crepe","Casserole","Ceviche","Cannellini beans","Cantaloupe","Cheesecake","Cinnamon","Cucumber pickle","Celery","Cod","Clams","Coconut","Couscous",
"Date","Dragonfruit","Doughnut","Dandelion","Duck","Dill pickles","Dim sum","Dulce de leche","Donut","Deviled eggs","Duck confit","Durian","Dosas","Dates","Dry fruit","Dragon roll","Duck breast","Dahi","Date shake","Dumpling",
"Eggplant","Edamame","Escargot","English muffin","Egg rolls","Egg salad","Empanadas","Eclairs","Endive","Eggnog","Escarole","Entrecôte","Evaporated milk","Elote","Enchiladas","English soup","Egg tart","Elderberry","Escabeche","Espresso",
"Falafel","Fennel","Figs","Fish tacos","French fries","Frittata","Fruit salad","Fudge","French toast","Frankfurter","Falooda","Filet mignon","Fruitcake","Fondu","Frappuccino","Fajitas","Flan","Flapjack","Falafel wrap","Focaccia",
"Grapes","Garlic bread","Gyoza","Guacamole","Gingerbread","Gazpacho","Granola","Gouda","Gumbo","Gyro","Greek salad","Goose","Granadilla","Grape juice","Grapefruit","Gazania (flower pot pie?)","Ghee","Goujons","Grapenuts","Gumbo soup",
"Hamburger","Honeydew melon","Halibut","Hash browns","Hummus","Hot dog","Hazelnut","Herring","Hoagie","Hollandaise","Hush puppies","Herb salad","Herb bread","Honey glazed ham","Hungarian goulash","Habañero salsa","Hare stew","Hotcakes","Hot chocolate","Hungarian paprika chicken",
"Iceberg lettuce","Ice cream","Irish stew","Iced tea","Italian bread","Italian sausage","Idli","Ikura sushi","Injera","Iced coffee","Italian wedding soup","Iced latte","Irish soda bread","Italian gelato","Indian curry","Iced mocha","Italian cannoli","Israeli couscous","Iced matcha","Italian risotto",
"Jackfruit","Jambalaya","Jicama","Jam","Jerky","Jollof rice","Jalapeño poppers","Java plum","Juice","Jelly","Japanese eggplant","Jiaozi","Johnny cakes","Jibarito","Juniper berries","Jägerschnitzel","Jimaca","Jerk chicken","Jujubes","Jordan almonds",
"Kale","Kiwi","Kumquat","Kebab","Kimchi","Ketchup","Kidney beans","Kohlrabi","Kabob","Kasha","Kefta","Kasha varnishkes","Kumara","Key lime pie","Kung pao chicken","Kimchi stew","Kofta","Kolache","Kale salad","Katsu",
"Lemon","Lime","Lettuce","Lentils","Lobster","Linguini","Lychee","Leek","Licorice","Limeade","Lasagna","Lamb chop","Lemon tart","Leftover stew","Lassi","Lox","Lemon cake","Ladyfinger","Liver pâté","Lentil soup",
"Mango","Mushroom","Macaroni","Milkshake","Muesli","Mint","Molletes","Miso soup","Muffin","Mustard greens","Macadamia nuts","Marzipan","Mango lassi","Meatloaf","Mozzarella","Moussaka","Mahi mahi","Masala dosa","Margarita (drink)","Macaroon",
"Nectarine","Naan","Nachos","Nutmeg","Noodle","Nutella","Nori","Navy beans","Nectarine juice","Nigiri","Nut roast","Neapolitan pizza","Nougat","Nettle soup","Nduja","Nicoise salad","Noodle soup","Nut brittle","Napolitana","Nashi pear",
"Orange","Oatmeal","Omelette","Okra","Olive","Oregano-based herb","Onion rings","Oat bread","Omelet sandwich","Orecchiette","Ouzo (drink)","Oxtail stew","Oregano sauce","Orzo","Ox liver pâté","Omelette rice","Orecchiette pasta","Okra stew","Oatmeal cookies","Oca",
"Pineapple","Peach","Pear","Potato","Pita bread","Pepperoni","Pancakes","Quiche", "Pumpkin pie","Prawn cocktail","Pesto","Pancetta","Pork chops","Pavlova","Pancit","Paratha","Pecan pie","Plantain","Penne","Pistachios","Papaya","Popcorn","Porridge",
"Quince","Quinoa","Quesadilla","Quail eggs","Quahog","Queso","Qindim","Quenelle","Quark cheese","Quick bread","Qatayef","Queso dip","Quinotto","Quorn","Quadratini cookies","Quail","Quesadilla al pastor","Quattro formaggi pizza","Quince paste","Queen of puddings",
"Raspberry","Rice","Radish","Ravioli","Risotto","Ramen","Reuben sandwich","Ricotta","Rutabaga","Roast beef","Rye bread","Radicchio","Red beans","Rigatoni","Roulade","Ratatouille","Red velvet cake","Rollmops","Roquefort","Roulade",
"Strawberry","Salami","Salmon","Salsa","Spinach","Spaghetti","Steak","Shrimp","Soup","Sushi","Sausage","Sauerkraut","Scallops","Schnitzel","Strudel","Swiss cheese","Sandwich","Soba","Stew","Sorbet",
"Tomato","Turkey","Tuna","Tater tots","Tofu","Tiramisu","Tapenade","Tagliatelle","Tempura","Toast","Trifle","Tortellini","Tortilla","Teacake","Tortilla soup","Tahini","Tabbouleh","Tonkatsu","Tuna salad","Ticket pie",
"Udon noodles","Ugali","Ugli fruit","Urad dal","Upma","Unagi","Upside-down cake","Utica greens","Urfa biber spice","Urchin (sea urchin)","Ube dessert","Udon stir-fry","Uthappam","Urad stew","Unadon","Ube halaya","Udon soup","Umeshu (plum wine)","Udon salad","Udon noodles stir fry",
"Vanilla","Vinegar","Vegetable soup","Veal","Vermicelli","Vada pav","Vindaloo","Velouté","Vanilla pudding","Viennoiserie","Valencia oranges","Veggie burger","Venison","Vichyssoise","Vine leaves","Vidalia onion","Vietnamese pho","Vanilla ice cream","Vegan chili",
"Watermelon","Walnut","Waffle","Wheat bread","Wonton","Watercress","Waffle fries","Wasabi","Whiskey (drinks skip?),","Waldorf salad","White chocolate","Wiener schnitzel","Wild rice","Welsh rarebit","Water chestnut","Waffles","Wine (skip)","Waldorf",
"Xacuti","Xigua","Xiao long bao","Xnipec","Xoi sticky rice","Xanthan gum (food additive skip?),","Xalapa punch","Xidoufen (Chinese soup)","Xoconostle (cactus fruit)","Xarel-lo grape","Xouba (small sardine)","Xavier soup","Xavier rolls","Xavier steak","Xnipec salsa","Xigua melon","Ximango fruit","Xào lẩu (Vietnamese stew)","Xilocarpus fruit",
"Yam","Yogurt","Yuzu","Yorkshire pudding","Yerba mate (drink skip)","Yabby (crayfish)","Yellow pepper","Yam cake","Yiros (gyro)","Yiros wrap","Yaki udon","Yiros salad","Yiros pita","Yiros kebab","Yiros platter","Yellowtail","Yam fries","Yucca","Yakitori","Yellow watermelon","Yogurt parfait",
"Zucchini","Ziti","Zatar","Zabaglione","Ziti pasta","Zinfandel grape","Zrazy (Polish roulade)","Zoodles","Zebra cake","Ziti bake","Zest cake", "Zabaglione dessert","Zante currant","Zopf bread","Zserbó slice","Zesty lemon pie","Zesty noodle","Zoni soup","Ziti with pesto"

  ];

  function filtrarOpciones() {
    const input = document.getElementById("busqueda").value.toLowerCase();
    const lista = document.getElementById("sugerencias");
    lista.innerHTML = "";

    // Ocultar lista si el input está vacío
    if (input === "") {
      lista.style.display = "none";
      return;
    }

    const resultados = platillos.filter(item => item.toLowerCase().includes(input));

    // Si no hay resultados, ocultar la lista
    if (resultados.length === 0) {
      lista.style.display = "none";
      return;
    }

    // Mostrar la lista y agregar elementos
    lista.style.display = "block";

    resultados.forEach(item => {
      const li = document.createElement("li");
      li.textContent = item;
      li.onclick = () => {
        document.getElementById("busqueda").value = item;
        lista.innerHTML = "";
        lista.style.display = "none";
      };
      lista.appendChild(li);
    });
  }

