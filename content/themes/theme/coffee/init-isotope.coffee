if $('.isotope').length > 0
  grid = $('.isotope')
  
  $('main').imagesLoaded(->
    grid.isotope {}
    return
  )