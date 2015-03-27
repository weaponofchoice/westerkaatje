if $('.isotope').length > 0
  masonry = $('.isotope_masonry')
  
  $('main').imagesLoaded(->
    masonry.isotope {
      layoutMode: 'masonry'
    }
    return
  )