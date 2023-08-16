import myJson from "./data.json" assert { type: "json" };

("use strict");

const project_name = {
    global: {
        data: myJson.result,
        init() {
            this.data.forEach((el, index) => {
                if (el.isShow) {
                    let i = index + 1;
                    document.querySelector("body").innerHTML += `
                    <section class="sec-${i}">
                        <h2 class="sec-${i}__title">${el.title}</h2>
                        <p class="sec-${i}__desc">${el.desc}</p>
                    </section>
                    <br /><br />
                    `;
                }
            });
        }
    },
    list: {
        data: myJson.data,
        init() {
            for (let i = this.data.length; i > 0; i--) {
                const idx = i-1;
                const $list_target = document.querySelector(".section-test__table");
                const title = this.data[idx].title;
                const author = this.data[idx].author;
                const date = this.data[idx].date;
                $list_target.innerHTML += `
                <tr>
                    <td>${i}</td>
                    <td>${title}</td>
                    <td>${author}</td>
                    <td>${date}</td>
                </tr>
                `;
            }
        },
    },
    init() {
        this.global.init();
        this.list.init();
    },
};

project_name.init();
