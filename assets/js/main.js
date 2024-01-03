let mobile_menu = document.querySelector('#menu-btn')
let navbar = document.querySelector('.header .navbar')

mobile_menu.addEventListener('click',()=>
{
    mobile_menu.classList.toggle('fa-times')
    navbar.classList.toggle('active')
})

window.onscroll = () =>
{
    mobile_menu.classList.remove('fa-times')
    navbar.classList.remove('active')
}

var swiper = new Swiper(".home-slider",
{
    loop:true,
    navigation:
    {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
})

var swiper = new Swiper(".review-slider",
{
    loop:true,
    spaceBetween: 20,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
        640: {
          slidesPerView: 1,
          
        },
        768: {
          slidesPerView: 2,
          
        },
        1024: {
          slidesPerView: 3,
          
        },
      },
})

// let loadMoreBtn = document.querySelector('.packages .load-more .btn')
// let currentItem = 3

// loadMoreBtn.onclick = () =>
// {
//    let boxes = [...document.querySelectorAll('.packages .box-container .box')]

//    for(let i = currentItem; i <currentItem + 3; i++)
//    {
//      boxes[i].style.display = 'inline-block'
//    }

//    currentItem += 3

//    if(currentItem >= boxes.length)
//    {
//      loadMoreBtn.computedStyleMap.display = 'none'
//    }
// }


// function to show items
function showItems(startIndex, endIndex, boxes) 
{
  for (let i = startIndex; i < endIndex; i++) 
  {
    if (boxes[i]) 
    {
      boxes[i].style.display = 'inline-block';
    }
  }
}

// main function for load more items
function loadMoreItems() 
{
  const loadMoreBtn = document.querySelector('.packages .load-more .btn');
  const boxes = [...document.querySelectorAll('.packages .box-container .box')];
  let currentItem = 3;

  loadMoreBtn.onclick = () => 
  {
    showItems(currentItem, currentItem + 3, boxes);

    currentItem += 3;

    if (currentItem >= boxes.length) 
    {
      loadMoreBtn.style.display = 'none';
    }
  };
}

// main function call
loadMoreItems();
