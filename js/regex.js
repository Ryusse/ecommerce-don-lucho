export const Regex = {
  firstName: /^[a-zA-ZÀ-ÿ,.'-\s]{1,40}$/,
  lastName: /^[a-zA-ZÀ-ÿ,.'-\s]{1,40}$/,
  password: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,16}$/,
  email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
}
