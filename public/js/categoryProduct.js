let filterItemCount = 0;
function addSizeItemToList(id)
{
   
    // console.log(id);

    // let checkBox = document.getElementById(id);
    // alert(checkBox.checked)
    // let newId = "size"+id;
    // if(checkBox.checked == true)
    // {
    //     let selectedFilterItems = 
    //     `
    //         <label for="${id}" class="filterItems">
    //             <div id ="${newId}" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2">
    //                 <span class="pr-3">${id}</span>
    //                 <i class="fas fa-times pl-3"></i>
    //             </div>
    //         </label>
    //     `
    //     let selectedArea = document.getElementById("selectedFilterSection").innerHTML;
    //     document.getElementById("selectedFilterSection").innerHTML +=selectedFilterItems;
    //     console.log(document.getElementById("selectedFilterSection"));

    //     filterItemCount +=1;
    // }
    // else
    // {
    //    let removeItem= document.getElementById(newId);
       

    //         //    removeItem="";
    //    console.log(removeItem);    
    //    removeItem.classList.add("removeItem");
    //    removeItem.classList.add("d-none");
    //    removeItem.classList.remove("mx-2");
    //    removeItem.classList.remove("align-items-center");
    //    removeItem.classList.remove("justify-content-center");
    //    removeItem.classList.remove("d-flex");
    //    removeItem.innerHTML="";
    //    removeItem.id="";
    //    console.log(removeItem);
    //    filterItemCount -=1;
    // }

    // showHideClearBtn();
}

function SortByFun(id)
{
    SortByFunRemove(id);
    
    if(document.getElementById(id).checked ==true)
    {
        console.log("ID="+id);
        let elementList = document.querySelectorAll(".bySortRadios");
        console.log(elementList);
        elementList.forEach(obj=>{
            let newId = "sort"+obj.id;

            if(obj.id == id )
            {
                console.log("Inside loop"+obj);
                
                let selectedFilterItems = 
                `
                    <label for="" class="removeRadioOption filterItems">
                        <div id ="${newId}" class="d-flex justify-content-center align-items-center selectedFilterItem mx-2 ">
                            <span class="pr-3">${obj.id}</span>
                            <i class="fas fa-times pl-3"onClick="RemoveAllSortOptions()" ></i>
                        </div>
                    </label>
                `
                let selectedArea = document.getElementById("selectedFilterSection").innerHTML;
                document.getElementById("selectedFilterSection").innerHTML +=selectedFilterItems;
                filterItemCount +=1;
            }
        })

      
       

    }
    showHideClearBtn();

}

function SortByFunRemove(id)
{
    
    let elementList = document.querySelectorAll(".removeRadioOption");

    console.log("Inside sortByFunRemove length "+elementList.length);

    elementList.forEach(obj2=>{

            console.log(obj2);    
            obj2.classList.add("removeItem");
            obj2.classList.add("d-none");
            obj2.innerHTML="";
            console.log(obj2);
       
    })   
    filterItemCount -=1;
    showHideClearBtn();
}

function RemoveAllSortOptions()
{
    let elementList = document.querySelectorAll(".removeRadioOption");

    console.log("Inside sortByFunRemove length "+elementList.length);

    elementList.forEach(obj2=>{

            console.log(obj2);    
            obj2.classList.add("removeItem");
            obj2.classList.add("d-none");
            obj2.innerHTML="";
            console.log(obj2);
       
    })
    filterItemCount -=1;
    showHideClearBtn();
}

function clearAll()
{
    let allOptions = document.querySelectorAll(".filterInput");
    allOptions.forEach(opt=>{
        opt.checked=false;
    })
    document.getElementById("selectedFilterSection").innerHTML ="";
    filterItemCount =0;
    showHideClearBtn();
}

function showHideClearBtn()
{

    if(filterItemCount >0)
    {
        document.getElementById("clearAllButton").classList.remove("d-none");
    }
    else
    {
        document.getElementById("clearAllButton").classList.add("d-none");
    }
}



function showFilter()
{
    
    let ele= document.getElementById("mobFilterOptions");
    console.log(ele);
    ele.classList.remove("mobCatOption");
    ele.classList.add("showFilter");
}
function closeFilter()
{
    let ele= document.getElementById("mobFilterOptions");
    console.log(ele);
    ele.classList.add("mobCatOption");
    ele.classList.remove("showFilter");
}



    

