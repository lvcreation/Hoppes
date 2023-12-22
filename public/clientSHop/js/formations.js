
export const catShowFormation = () => {
    const catFormations = document.querySelector('#formations--details');
    catFormations.classList.add('visible--catFormation');

}

export const catHideFormation = () => {
    const catFormations = document.querySelector('#formations--details');
    catFormations.classList.remove('visible--catFormation')
}