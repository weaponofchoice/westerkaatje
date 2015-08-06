$ ->
  $object = $('.section-accordion ul li')
  $trigger = $('.section-accordion ul li p')

  $trigger.click ->
    $target = $(this).closest("li").children("div")

    $target.toggleClass "active"
    $(this).parent("li").toggleClass "opened"
