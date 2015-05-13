$ ->
  anchor = $('.has_anchor')
  anchor_last = anchor.last()
  
  waypoints = anchor.waypoint((direction) ->
    $('section').removeClass "anchor_current"
    $(this.element).addClass "anchor_current"
  )
  
  waypoints = anchor_last.waypoint(((direction) ->
    $('section').removeClass "anchor_current"
    $(this.element).addClass "anchor_current"
  ), offset: 'bottom-in-view')