$ ->
  slider = $('.slider')
  slider.each ->
    images = $(this).find('.slider-images')
    image = $(this).find('.slider-images li')
  
    controls = $(this).find('.slider-controls')
    bullets = $(this).find('.slider-bullets')
    bullet = $(this).find('.slider-bullets li')
  
    next = $(this).find('.slider-next')
    prev = $(this).find('.slider-prev')
  
    # common delay function
    # use like this: delay 100, -> do.whatever
    delay = (ms, func) -> setTimeout func, ms
  
    # first image & bullet get first & active classes
    image.first().addClass "first-image first is-active"
    bullet.first().addClass "first-bullet first is-active"
  
    # last image & bullet get last class
    image.last().addClass "last-image last"
    bullet.last().addClass "last-bullet last"
  
    # lightbox functionality
    open = $(this).find('.lightbox-open')
    close = $(this).find('.lightbox-close')
  
    open.click ->
      gallery.addClass "is-zoomed"
    
    close.click ->
      gallery.removeClass "is-zoomed"
    
      # Determine heights
      gallery_width = gallery.width()
    
      # Apply heights
      gallery.css "height", gallery_width * 0.75
      $('#order').css "height", gallery_width * 0.75
    
    # next button
    next.click ->
      current = $('.is-active')
    
      if current.hasClass "last"
        target = $('.first')
      else
        target = current.next()
    
      current.removeClass "is-active"
      target.addClass "is-active"
    
    # previous button
    prev.click ->
      current = $('.is-active')
    
      if current.hasClass "first"
        target = $('.last')
      else
        target = current.prev()
    
      current.removeClass "is-active"
      target.addClass "is-active"
    
    # next image if you click on the image
    image.click ->
      current = $('.is-active')
    
      if current.hasClass "last"
        target = $('.first')
      else
        target = current.next()
    
      current.removeClass "is-active"
      target.addClass "is-active"
    
    # arrow keys
    $(window).keydown (e) ->
    	if e.which == 39 # right arrow key
      current = $('.is-active')
    
      if current.hasClass "last"
        target = $('.first')
      else
        target = current.next()
    
      current.removeClass "is-active"
      target.addClass "is-active"
  
    	if e.which == 37 # left arrow key
      current = $('.is-active')
    
      if current.hasClass "first"
        target = $('.last')
      else
        target = current.prev()
    
      current.removeClass "is-active"
      target.addClass "is-active"
  
    # swipe left for next image
    image.on "swipeleft", ->
      current = $('.is-active')
    
      if current.hasClass "last"
        target = $('.first')
      else
        target = current.next()
      
      current.removeClass "is-active"
      target.addClass "is-active"
  
    # swipe right for previous image
    image.on "swiperight", ->
      current = $('.is-active')
    
      if current.hasClass "first"
        target = $('.last')
      else
        target = current.prev()
    
      current.removeClass "is-active"
      target.addClass "is-active"
  
    # slider automatic function
    # if $(this).hasClass "slider-auto"
#       setInterval (->
#         current = $('.is-active')
#
#         if current.hasClass "last"
#           target = $('.first')
#         else
#           target = current.next()
#
#         current.removeClass "is-active"
#         target.addClass "is-active"
#       ), 3000
    
    # Hiding bullets if there's only 1 image
    if image.length < 2
      bullets.hide()
      controls.hide()
    else
      # show them