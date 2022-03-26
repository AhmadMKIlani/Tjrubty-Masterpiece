const currentLocation = location.href;
const menuItem = document.querySelectorAll('.nav-link');
const liItem = document.querySelectorAll('.nav-item');
const menuLength = menuItem.length;
for (let i=0; i<menuLength; i++)
{
	 if(menuItem[i].href === currentLocation){
          liItem[i].classList.add("active");
                }
}

