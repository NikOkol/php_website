export class FillingBlock {
    constructor(id, name, description, image)
    {
        this.id = id
        this.name = name
        this.description = description
        this.image = image
    }


    output() {
        return `
        <div class="filling">
            <img src="${this.image}" alt="${this.name}">
            <div class="fil-text"> 
                <b>${this.name}</b><br>
                ${this.description}<br>
                <form action="fill_choice.php" method="post">
                <input type="submit" name="${this.id}" value="Выбрать">
                </form>
            </div>
        </div><br>`
    }
}