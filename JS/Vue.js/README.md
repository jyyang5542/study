# Vue.js

```
npm i -g @vue/cli
```
```
vue create project_name
```
```
// SCSS 설치
npm i --save-dev sass-loader node-sass // 2.0 버전은 sass-loader@10

// 이후 vue 문서 내에서
<style lang="scss" scoped>
/** **/
</style>
```
<br />

## setting 파일에서 아래 내용 추가
```
"eslint.workingDirectories" : [
    {"mode": "auto"}
]
```
<br />

## 확장 프로그램
* Vutur - 초기 설치 시 일반 text 처럼 보이는데, 설치하면 HTML 코드처럼 하이라이트됨