/*TODO:

 - Simply function to changing visibility of the hidden menu!!!!!!

*/

function ChangeContainerDisplay(elementID)
{
    console.log(elementID)
    const element = document.querySelector("#"+elementID);
    console.log(element);
    console.dir(element);

    /*if (document.getElementById(elementID).style.display == 'none')
    {
        document.getElementById(elementID).style.display = 'block';
    }
    else
    {
        document.getElementById(elementID).style.display = 'none';
    }*/
}

document.querySelector('.menuIcon').addEventListener("click", () => {

    if (document.querySelector('.hidden-nav').style.display == 'none')
    {
        document.querySelector('.hidden-nav').style.display = 'block';
    }
    else
    {
        document.querySelector('.hidden-nav').style.display = 'none';
    }
});