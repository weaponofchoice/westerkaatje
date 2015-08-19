$ ->
  block = $('.section-block')
  block_text = $('.section-block.text')
  block_count_default = 1
  block_count_text = 1

  block_text.each ->
    if block_count_text % 2 is 0
      $(this).addClass "even"
    else
      $(this).addClass "odd"

    block_count_text = block_count_text + 1

  block.each ->
    if block_count_default % 2 is 0
      $(this).addClass "right"
    else
      $(this).addClass "left"

    block_count_default = block_count_default + 1
