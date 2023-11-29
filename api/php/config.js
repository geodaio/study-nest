//CODE NOT MINE: https://cockroachlabs.cloud/cluster/684ef6fc-2e22-46c4-9c83-11e80b21b26f/sql-shell
const config = {
  connectionString: process.env.DATABASE_URL,
  ssl: {
    rejectUnauthorized: true,
    ca: process.env.CERT
  }
};
exports.config = config;
