$ ->
  $acc = $('.section-accordion')
  $acc_head = $('.section-accordion .section-header')

  $acc_head.click ->
    $acc_desc = $(this).closest(".section-accordion").children(".section-body")

    $acc_desc.toggleClass "active"
    $(this).parent(".section-accordion").toggleClass "opened"
