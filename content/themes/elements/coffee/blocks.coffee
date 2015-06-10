$ ->
  block = $('.section-block')
  block_text = $('.section-block.text')
  block_count = 1
  
  block_text.each ->
    if block_count % 2 is 0
      $(this).addClass "even"
    else
      $(this).addClass "odd"
    
    block_count = block_count + 1
    
  block.each ->
    if block_count % 2 is 0
      $(this).addClass "right"
    else
      $(this).addClass "left"
    
    block_count = block_count + 1