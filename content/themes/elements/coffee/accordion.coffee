$ ->
  $acc = $('.section-accordion')
  $acc_title = $('.section-accordion .section-header p')

  $acc_title.click ->
    $acc_desc = $(this).closest(".section-accordion").children(".section-body")

    $acc_desc.toggleClass "active"
