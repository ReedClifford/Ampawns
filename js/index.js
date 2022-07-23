const openModalBUttons = document.querySelectorAll("[data-modal-target]")
const closeModalBUttons = document.querySelectorAll("[data-close-button]")
const overlay = document.getElementById("overlay")


openModalBUttons.forEach(button =>{
    button.addEventListener("click",function () {
        const modal = document.querySelector(button.dataset.modalTarget)
        openModal(modal)
        
    })
})

overlay.addEventListener("click",function () {
    const modals = document.querySelectorAll(".modal.active")
    modals.forEach(modal => {
        closeModal(modal)
    })
    
})
closeModalBUttons.forEach(button =>{
    button.addEventListener("click",function () {
        const modal = button.closest(".modal")
        closeModal(modal)
        
    })
})

function openModal(modal) {
    if (modal==null) return
    modal.classList.add("active")
    overlay.classList.add("active")
        
    
    
}

function closeModal(modal) {
    if (modal==null) return
    modal.classList.remove("active")
    overlay.classList.remove("active")
        
    
    
}

// GCASH

const openModalBUttons2 = document.querySelectorAll("[data-modal-target]")
const closeModalBUttons2 = document.querySelectorAll("[data-close-button]")
const overlay2 = document.getElementById("overlay2")


openModalBUttons.forEach(button =>{
    button.addEventListener("click",function () {
        const modal2 = document.querySelector(button.dataset.modalTarget)
        openModal(modal2)
        
    })
})

overlay.addEventListener("click",function () {
    const modals2 = document.querySelectorAll(".modal.active")
    modals2.forEach(modal2 => {
        closeModal(modal2)
    })
    
})
closeModalBUttons.forEach(button =>{
    button.addEventListener("click",function () {
        const modal2 = button.closest(".modal")
        closeModal(modal2)
        
    })
})

function openModal2(modal2) {
    if (modal==null) return
    modal.classList.add("active")
    overlay.classList.add("active")
        
    
    
}

function closeModal(modal) {
    if (modal==null) return
    modal.classList.remove("active")
    overlay.classList.remove("active")
        
    
    
}